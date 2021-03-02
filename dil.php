<?php 
class dilyonetim{
	public $veriler=array();

	function trdil(){
		$this->veriler=array(
		"icerik"=>"Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe",
		"link1"=>"yeni konular",
		"link2"=>"haberler",
		"link3"=>"videolar",
		"link4"=>"resimler"
		);
		return $this->veriler;
	}
	function endil(){
		$this->veriler=array(
		"icerik"=>"ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ingilizce ",
		"link1"=>"news topic",
		"link2"=>"news",
		"link3"=>"videos",
		"link4"=>"pictures");
		return $this->veriler;
	}

	function getir($dil){
		if ($dil=="tr") {
			return self::trdil();
		}else if($dil=="en"){
			return self::endil();
		}
	}
















}



?>