<?php
class ItemCard {
  public $masp;
  public $url;
  public $tensp;
  public $giasp;

  function __construct($masp,$url,$tensp,$giasp) {
    $this->masp = $masp;
    $this->url = $url;
    $this->tensp = $tensp;
    $this->giasp = $giasp;
  }
  function create() {
    echo '<div class="col-lg-4 col-md-6 mb-4">'. 
    '<div class="card">'. 
    "<a href=\""."index.php?a=4&id=".$this->masp."\"><img class=\"card-img-top\" src=\"".'./images/sanpham/'.$this->url."\"></a>". 
    '<div class="card-body">'. 
    "<h6 class=\"card-title text-center\">" .$this->tensp . "</h6>". 
    ' <div class="buy d-flex justify-content-between align-items-center">'. 
    ' <div class="price text-success">'. 
    "<h5 class=\"mt-4\">" . $this->giasp . " vnđ</h5>". 
    ' </div>'. 
    '  <a href="#" class="btn btn-danger mt-3"><i class="fa fa-shopping-cart"></i> Add to Cart</a>'. 
    '  </div>'. 
    ' </div>'. 
    '  </div>'. 
    '</div>'
    ;
  }
}

?>