<!-- Scrapping -->
<?php
require('simple_html_dom.php');

//cabe merah agromaret
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://www.agromaret.com/search/q?type=jual&_token=ZXKfpBdjSfVAyiX6DRzjVzf3IlL8iORbqBHtmI8e&query=cabe+merah&parameter=all');
curl_setopt($ch, CURLOPT_URL, 'https://www.agromaret.com/search/q?type=jual&_token=ZXKfpBdjSfVAyiX6DRzjVzf3IlL8iORbqBHtmI8e&query=cabe+merah&parameter=all');

$data = curl_exec($ch);
curl_close($ch);

$products1 = array();
$products2 = array();

$html = str_get_html($data);

$bahan = $html->find('div[class=card-row]', 0);

$kotak = $bahan->find('div[class=card flex-justified]');

foreach($kotak as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=image]',0);
    $img = $divimg->find('img',0)->src;
    $link = $divimg->find('a',0)->href;

    $divtitle = $val->find('div[class=title]',0);
    $title = $divtitle->find('a',0)->innertext;

    $divharga = $val->find('div[class=price]',0);
    $harga1 = $divharga->find('span',0)->innertext;
    $harga2 = $divharga->find('span',1)->innertext;
    $harga = $divharga->find('p',0)->innertext;

    $divlogo = $html->find('div[class=navbar-logo]',0);
    $logo = $divlogo->find('img',0)->src;

    $products1[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'harga1' => $harga1,
        'harga2' => $harga2,
        'logo' => $logo
    );
} 
//cabe merah agromaret



//cabe bibitonline
$ch3 = curl_init();
curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch3, CURLOPT_REFERER, 'https://bibitonline.com/kategori/benih-bibit-tanaman/tanaman-sayuran/cabe');
curl_setopt($ch3, CURLOPT_URL, 'https://bibitonline.com/kategori/benih-bibit-tanaman/tanaman-sayuran/cabe');

$data3 = curl_exec($ch3);
curl_close($ch3);

$products4 = array();

$html3 = str_get_html($data3);

$bahanc3 = $html3->find('div[class=shop-container]', 0);

$kotakc3 = $bahanc3->find('div[class=col-inner]');

foreach($kotakc3 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=image-none]',0);
    $img = $divimg->find('img',0)->src;
    $link = $divimg->find('a',0)->href;

    $divtitle = $val->find('div[class=title-wrapper]',0);
    $title = $divtitle->find('a',0)->innertext;

    $divharga = $val->find('div[class=price-wrapper]',0);
    $harga = $divharga->find('span',0)->innertext;
    $harga1 = $divharga->find('span',1)->innertext;

    $divlogo = $html3->find('div[id=logo]',0);
    $logo = $divlogo->find('img',0)->src;

    $products4[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'harga1' => $harga1,
        'logo' => $logo
    );
} 
//cabe bibitonline



// toko e komers besar
$ch8 = curl_init();
curl_setopt($ch8, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch8, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch8, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch8, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch8, CURLOPT_REFERER, 'https://iprice.co.id/search/?term=cabai+merah');
curl_setopt($ch8, CURLOPT_URL, 'https://iprice.co.id/search/?term=cabai+merah');

$data8 = curl_exec($ch8);
curl_close($ch8);

$products9 = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[class=pk cN lQ kF]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $products9[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
    );
}
// toko e komers besar



// indomaret
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://www.klikindomaret.com/search/?key=cabe%20merah');
curl_setopt($ch9, CURLOPT_URL, 'https://www.klikindomaret.com/search/?key=cabe%20merah');

$data9 = curl_exec($ch9);
curl_close($ch9);

$products10 = array();

$html9 = str_get_html($data9);

$bahanc9 = $html9->find('div[class=box-item clearfix]', 0);

$kotakc9 = $bahanc9->find('div[class=item]');

foreach($kotakc9 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=wrp-media]',0);
    $img = $divimg->find('img',0)->getAttribute('data-src');
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('div[class=wrp-content]',0);
    $title = $divtitle->find('div[class=title]',0)->innertext;

    $divharga = $val->find('div[class=wrp-price one]',0);
    $harga = $divharga->find('span[class=normal price-value]',0)->innertext;

    $products10[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga

    );
}
// indomaret



?>
<!-- Scrapping -->