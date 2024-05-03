<!-- <?php

            // numeric diziler 
    $renkler=["Kırmızı", "Mavi", "Sarı"];

    echo gettype($renkler)."<br>";
    echo $renkler[0]."<br>";
    echo $renkler[2]."<br>";

    $sayilar=[18, 27,39,45];
    echo $sayilar[1]."<br>";
    
            // associative diziler 
    $plakalar=array(
    "34"=>"istanbul",
    "15"=>"Burdur",
    "23"=>"Elazığ"
    );

    echo $plakalar["34"]."<br>";

    $numaralar=array(
        "ali"=>"053444444",
        "ahmet"=>"0543222",
        "asiye"=>"0543222"
    );
    echo $numaralar["asiye"]."<br>";
?>
 -->

<?php
            // Çok boyutlu diziler
    $ogrenciA=array("Ahmet Yılmaz",array(50,70,90));
    $ogrenciB=array("Mehmet Yılmaz",array(50,80,90));

    $ogrenciA_ort= ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
    
    echo $ogrenciA[0]."<br>";
    echo $ogrenciA[1][0]."<br>";
    echo $ogrenciA[1][1]."<br>";
    echo $ogrenciA[1][2]."<br>";

    echo $ogrenciB[0]."<br>";
    echo $ogrenciB[1][0]."<br>";
    echo $ogrenciB[1][1]."<br>";
    echo $ogrenciB[1][2]."<br>";

    echo $ogrenciA_ort."<br>";

    $sinif=array(
        "100"=> array(
            "ad" => "Hasan",
            "soyad" => "Uludağ",
            "notlar" => array(
                "matematik"=>array(50,90,50),
                "fizik"=> array(50,40,90),
                "kimya"=>array(80,90,100)
            ),
        ),
        "200"=> array(
            "ad" => "Memiş",
            "soyad" => "Uludağ",
            "notlar" => array(
                "matematik"=>array(40,90,50),
                "fizik"=> array(70,60,90),
                "kimya"=>array(100,90,100)
            ),
        ),
    );
    echo $sinif["100"]["ad"]."<br>";
    echo $sinif["100"]["soyad"]."<br>";
    echo $sinif["100"]["notlar"]["matematik"][0]."<br>";
    echo $sinif["100"]["notlar"]["matematik"][1]."<br>";
    echo $sinif["100"]["notlar"]["matematik"][2]."<br>";

    $not1=$sinif["200"]["notlar"]["kimya"][0];
    $not2=$sinif["200"]["notlar"]["kimya"][1];
    $not3=$sinif["200"]["notlar"]["kimya"][2];

    $ogr_ortalama=($not1 + $not2 + $not3) / 3;

    echo $ogr_ortalama;

?>


