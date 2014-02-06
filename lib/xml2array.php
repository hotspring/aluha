<?php
class Xml2Array{
	
	/**
	  * @copyright phoneplus.com
	  * @file:DB.class.php
	  * @author: lu xingyun
	  * @update:2012-10-2
	  * @version 1.0
	 * */

	private $xml;  
	
	public function __construct($xml){
		if(is_file($xml)){
			$this->xml = file_get_contents($xml);
		}else{
			$this->xml = $xml;    
		}
	}

	public function createArray(){ 
        $awsXml    = $this->xml;
        $awsVals = array(); 
        $awsIndex = array(); 
        $awsRetArray  = array(); 
        $awsParser = xml_parser_create();
        xml_parser_set_option($awsParser, XML_OPTION_SKIP_WHITE, 1);
        xml_parser_set_option($awsParser, XML_OPTION_CASE_FOLDING, 0);
        xml_parse_into_struct($awsParser, $awsXml, $awsVals, $awsIndex);
        xml_parser_free($awsParser);
        $i = 0; 
        $awsName = $awsVals[$i]['tag']; 
        $awsRetArray[$awsName] = isset($awsVals[$i]['attributes']) ? $awsVals[$i]['attributes'] : ''; 
        $awsRetArray[$awsName] = $this->_struct_to_array($awsVals, $i); 
        return $awsRetArray; 
    }
    
	protected function _struct_to_array($awsVals, &$i){
        $awsChild = array(); 
        if (isset($awsVals[$i]['value'])) array_push($awsChild, $awsVals[$i]['value']); 
        
        while ($i++ < count($awsVals)) { 
            switch ($awsVals[$i]['type']) { 
                case 'cdata': 
					array_push($awsChild, $awsVals[$i]['value']); 
					break; 

                case 'complete': 
                    $awsName = $awsVals[$i]['tag']; 
					if(!empty($awsName)){
						$awsChild[$awsName]= ($awsVals[$i]['value'])?($awsVals[$i]['value']):''; 
						if(isset($awsVals[$i]['attributes'])) {                    
							$awsChild[$awsName] = $awsVals[$i]['attributes']; 
						} 
					}   
					break; 

                case 'open': 
                    $awsName = $awsVals[$i]['tag']; 
                    $size = isset($awsChild[$awsName]) ? sizeof($awsChild[$awsName]) : 0;
					if(intval($size) > 0){
						$awsChild[$awsName][$size] = $this->_struct_to_array($awsVals, $i); 
					}else{
						$awsChild[$awsName] = $this->_struct_to_array($awsVals, $i); 
					}
					break;
                
                case 'close': 
                return $awsChild; 
                break; 
            }
        }
        return $awsChild; 
    }
   
}
//$xmlArray = new Xml2Array('permission.xml'); 
//$xml2Array = $xmlArray->createArray(); 
//print_r($xml2Array); 

?>