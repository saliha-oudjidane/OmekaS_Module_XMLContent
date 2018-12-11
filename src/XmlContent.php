<?php
  
 namespace XMLContent;

use Omeka\Api\Representation\MediaRepresentation;
use Omeka\Media\FileRenderer\RendererInterface;
use Zend\View\Renderer\PhpRenderer;

class XmlContent implements RendererInterface
{
   public function render(PhpRenderer $view, MediaRepresentation $media, array $options = [])
  {

	return sprintf('$simpleXml = simplexml_load_file($media);
	//----------------------------------------------------
	 echo "<h1><b>Rréférence :</h1></b>";
	 echo $simpleXml->control->recordId;echo "<br>";
	//---------------------------------------------------
	echo "<h1><b>Statut  :</h1></b>";
	 echo $simpleXml->control->maintenanceStatus;echo "<br>";
	 //--------------------------------------------------
	 echo "<h1><b>Nom :</h1></b>";
	 echo $simpleXml->control->maintenanceAgency->agencyName;echo "<br>";
	//-------------------------------------------------
	echo "<h1><b>Langue :</h1></b>";
	 echo $simpleXml->control->languageDeclaration->language;echo "<br>";

	//------------------------------------------------
	 echo "<h1><b>Citation :</h1></b>";
	 echo $simpleXml->control->conventionDeclaration->citation;echo "<br>";
	//-------------------------------------------------
	 echo "<h1><b>Date de création :</h1></b>";
	 echo $simpleXml->control->maintenanceHistory->maintenanceEvent->eventDateTime;echo "<br>";
	//------------------------------------------------
	 echo "<h1><b>Description :</h1></b>";
	 echo $simpleXml->control->maintenanceHistory->maintenanceEvent[1]->eventDescription;echo "<br>";
	//------------------------------------------------
	 echo "<h1><b>Source:</h1></b>";
	 echo $simpleXml->control->sources->source->sourceEntry;echo "<br>";
	//-----------------------------------------------

	 echo "<h1><b>Partis:</h1></b>";
	 echo $simpleXml->cpfDescription->identity->nameEntry->part;echo "<br>";
	//--------------------------------------------------

	echo "<h1><b>Dates :</h1></b>";
	echo $simpleXml->cpfDescription->description->existDates->dateRange->fromDate;
	 //-----------------------------------------------
	echo "&nbsp <b> à </b>&nbsp";
	echo $simpleXml->cpfDescription->description->existDates->dateRange->toDate;echo "<br>";
	//-------------------------------------------------

	',$view->escapeHtml($media->originalUrl())

  
  );
}

}


 ?>