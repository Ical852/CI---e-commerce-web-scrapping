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
$bahan2 = $html->find('div[class=card-row]', 1);

$kotak = $bahan->find('div[class=card flex-justified]');
$kotak2 = $bahan2->find('div[class=card flex-justified]');

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

foreach($kotak2 as $key => $val){
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

    $products2[] = array(
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



//cabe ijo agromaret
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_REFERER, 'https://www.agromaret.com/search/q?type=jual&_token=UH0xuBUxHw1F6nhFS1yhwGElBfzrtRJBothsHm2B&query=cabe+hijau&parameter=all');
curl_setopt($ch2, CURLOPT_URL, 'https://www.agromaret.com/search/q?type=jual&_token=UH0xuBUxHw1F6nhFS1yhwGElBfzrtRJBothsHm2B&query=cabe+hijau&parameter=all');

$data2 = curl_exec($ch2);
curl_close($ch2);

$products3 = array();

$html2 = str_get_html($data2);

$bahanc2 = $html2->find('div[class=card-row]', 0);

$kotakc2 = $bahanc2->find('div[class=card flex-justified]');

foreach($kotakc2 as $key => $val){
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

    $divlogo = $html2->find('div[class=navbar-logo]',0);
    $logo = $divlogo->find('img',0)->src;


    $products3[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'harga1' => $harga1,
        'harga2' => $harga2,
        'logo' => $logo
    );
} 
//cabe ijo agromaret



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



//cabe sentratani
$ch4 = curl_init();
curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch4, CURLOPT_REFERER, 'https://sentratani.com/?s=cabe+merah&post_type=product');
curl_setopt($ch4, CURLOPT_URL, 'https://sentratani.com/?s=cabe+merah&post_type=product');

$data4 = curl_exec($ch4);
curl_close($ch4);

$products5 = array();

$html4 = str_get_html($data4);

$bahanc4 = $html4->find('main[id=main]', 0);

$kotakc4 = $bahanc4->find('li[class]');

foreach($kotakc4 as $key => $val){
    //mengambil isi data dari web scrap
    $img = $val->find('img',0)->src;
    $link = $val->find('a',0)->href;
    $title = $val->find('h2',0)->innertext;

    $harga = $val->find('span',0)->innertext;

    $divlogo = $html4->find('picture[class=site-header-image]',0);
    $logo = $divlogo->find('img',0)->src;

    $products5[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
    );
}
//cabe sentratani



//cabe cari sayur
$ch5 = curl_init();
curl_setopt($ch5, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch5, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch5, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch5, CURLOPT_REFERER, 'https://carisayur.com/search?q=cabe');
curl_setopt($ch5, CURLOPT_URL, 'https://carisayur.com/search?q=cabe');

$data5 = curl_exec($ch5);
curl_close($ch5);

$products6 = array();

$html5 = str_get_html($data5);

$bahanc5 = $html5->find('div[class=container main-container]', 0);

$kotakc5 = $bahanc5->find('div[class=card]');

foreach($kotakc5 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=card-image]',0);
    $img = $divimg->find('img',0)->src;
    $link = $divimg->find('a',0)->href;

    $divtitle = $val->find('div[class=product-wrapper]',0);
    $title = $divtitle->find('p',0)->innertext;
    $title1 = $divtitle->find('p',1)->innertext;

    $harga = $val->find('p[class=product-price center]',0)->innertext;

    $divlogo = $html5->find('div[class=row row-navbar]',0);
    $logo = $divlogo->find('img',0)->src;

    $products6[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'title1' => $title1,
        'harga' => $harga,
        'logo' => $logo
    );
}
//cabe cari sayur



// //cabe primatani
// $ch6 = curl_init();
// curl_setopt($ch6, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch6, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch6, CURLOPT_FOLLOWLOCATION, 0);
// curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch6, CURLOPT_REFERER, 'http://www.primatani.com/catalog/search?q=cabe&cat_id=');
// curl_setopt($ch6, CURLOPT_URL, 'http://www.primatani.com/catalog/search?q=cabe&cat_id=');

// $data6 = curl_exec($ch6);
// curl_close($ch6);

// $products7 = array();

// $html6 = str_get_html($data6);

// $bahanc6 = $html6->find('div[class=row thumbnail-product]', 0);

// $kotakc6 = $bahanc6->find('div[class=product-col]');

// foreach($kotakc6 as $key => $val){
//     //mengambil isi data dari web scrap
//     $divimg = $val->find('div[class=image-product]',0);
//     $img = $divimg->find('img',0)->src;
//     $link = $divimg->find('a',0)->href;

//     $divtitle = $val->find('div[class=title-product]',0);
//     $title = $divtitle->find('h4',0)->innertext;

//     $divharga = $val->find('div[class=price]',0);
//     $harga = $divharga->find('span',0)->innertext;

//     $divlogo = $html6->find('div[class=footerlink]',0);
//     $logo = $divlogo->find('img',0)->src;

//     $products7[] = array(
//         'img' => $img,
//         'link' => $link,
//         'title' => $title,
//         'harga' => $harga,
//         'logo' => $logo
//     );
// } 
// //cabe primatani



// cabe purotani
$ch7 = curl_init();
curl_setopt($ch7, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch7, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch7, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch7, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch7, CURLOPT_REFERER, 'https://purotani.id/product?s=cabai+cabe+merah');
curl_setopt($ch7, CURLOPT_URL, 'https://purotani.id/product?s=cabai+cabe+merah');

$data7 = curl_exec($ch7);
curl_close($ch7);

$products8 = array();

$html7 = str_get_html($data7);

$bahanc7 = $html7->find('div[class=boxcontainer clear]', 0);

$kotakc7 = $bahanc7->find('article[class=productbox]');

foreach($kotakc7 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=thumb]',0);
    $img = $divimg->find('img',0)->getAttribute('data-src');
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('div[class=title]',0);
    $title = $divtitle->find('h3',0)->innertext;

    $divharga = $val->find('div[class=pricing]',0);
    $harga = $divharga->find('span[class=price]',0)->innertext;

    $divlogo = $html7->find('div[class=logo]',0);
    $logo = $divlogo->find('img',0)->src;

    $products8[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
    );
}
// cabe purotani



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


// bibit bunga
$ch10 = curl_init();
curl_setopt($ch10, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch10, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch10, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch10, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch10, CURLOPT_REFERER, 'https://bibitbunga.com/?s=cabe+merah&post_type=product');
curl_setopt($ch10, CURLOPT_URL, 'https://bibitbunga.com/?s=cabe+merah&post_type=product');

$data10 = curl_exec($ch10);
curl_close($ch10);

$products11 = array();

$html10 = str_get_html($data10);

$bahanc10 = $html10->find('div[class=shop-container]', 0);

$kotakc10 = $bahanc10->find('div[class=col-inner]');

foreach($kotakc10 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=box-image]',0);
    $img = $divimg->find('img',0)->src;
    $link = $divimg->find('a',0)->href;

    $divtitle = $val->find('div[class=title-wrapper]',0);
    $title = $divtitle->find('a',0)->innertext;

    $divharga = $val->find('div[class=price-wrapper]',0);
    $harga = $divharga->find('span[class=woocommerce-Price-amount amount]',0)->innertext;

    $divlogo = $html10->find('div[id=logo]',0);
    $logo = $divlogo->find('img',0)->src;

    $products11[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
    );
} 
// bibit bunga

?>
<!-- Scrapping -->