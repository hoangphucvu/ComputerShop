<?php
	/**
	* Phân trang sử dụng bootstrap
	* ------- Sử dụng -------
	* Đếm sản phẩm, tin tức: $total = 100;
	* Giới hạn hiển thị: $limit = 12;
	* Khai báo: $pager = new Pager($total,$limit);
	* Giá trị đầu tiên trong 1 trang: $start = $pager->startItem();
	* Lấy danh sách sản phẩm, tin tức: $model->danhsach($start,$limit);
	* Hiển thị phân trang: echo $pager->pageList($option = "Full|Short|Split");
	* ------- Option -------
	* Full:  | First | Prev | 1 | 2 | 3 | 4 | 5 | 6 | Next | Last |
	* Short: | First | Prev | 1 / 10 | Next | Last | 
	* Split: | First | Prev | 1 | 2 | 3 | ... | 7 | 8 | 9 | ... | 15 | 16 | 17 | Next | Last |
	*
	* ------- Ví dụ url -------
	* http://abc.vn/tin-tuc/cong-nghe/ => http://abc.vn/tin-tuc/cong-nghe/page-1
	* http://abc.vn/thoi-trang/ao-thun.html => http://abc.vn/thoi-trang/ao-thun/page-1
	*
	* Cao Phước Danh - http://danhcp.name.vn
	*/
	class Pager
	{
		private $_total;
		private $_curPage;
		private $_limit;
		protected $_pageList = '';
		function __construct($total, $limit)
		{
			$this->_total = $total;
			$this->_limit = $limit;

			if(isset($_GET['page'])){
				$this->_curPage = $_GET['page'];
			}
			else{
				$this->_curPage = 1;
			}
		}

		function totalPage()
		{
			return $this->_total % $this->_limit == 0 ? $this->_total / $this->_limit : ceil($this->_total / $this->_limit);
		}

		function startItem()
		{
			if ($this->_curPage < 1) {
				return 1;
			}
			return ($this->_curPage - 1) * $this->_limit;
		}

		function pageList($option)
		{
			$i = 0;
			$curLink = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

			if (substr($curLink, strlen($curLink) - 5) == '.html') {
				$curLink = substr($curLink, 0, strlen($curLink) - 5);
			}
			elseif (substr($curLink, strlen($curLink) - 1) == '/') {
				$curLink = substr($curLink, 0, strlen($curLink) - 1);
			}

			$subCurLink = substr($curLink, strripos($curLink, '/') + 1);
			if (preg_match('/^page-([0-9]+)/', $subCurLink)) {
				$curLink = substr($curLink, 0, strripos($curLink, '/'));
			}

			if ($this->_curPage < 1) header('Location: '.$curLink);
			if ($this->_curPage > $this->totalPage() && $this->totalPage() != 0) header('Location: '.$curLink.'/page-'.$this->totalPage());


			if ($this->totalPage() > 1) {
				$this->_pageList .= '<ul class="pagination pagination-xs pagination-sm">';

				if ($this->_curPage == 1) {
					$disable = 'disabled';
					$hreffirst = null;
					$hrefprev = null;
				}
				else{
					$disable = null;
					$hreffirst = "href='$curLink/page-1'";
					$hrefprev = "href='$curLink/page-".($this->_curPage -1)."'";
				}
				$this->_pageList .= "<li class='$disable'><a class='first' $hreffirst>First</a></li>";
				$this->_pageList .= "<li class='$disable'><a class='prev' $hrefprev>Prev</a></li>";
				

				if ($option == 'Full') {
					while ($i++ < $this->totalPage()) {
						$active = null;
						if($this->_curPage == $i){
							$active = 'active';
							$href = null;
						}
						else{
							$href = "href='$curLink/page-$i'";
						}
						$this->_pageList.="<li class='$active'><a $href class='page $active'>$i</a></li>";
					}
				}
				elseif ($option =='Short') {
					$this->_pageList.="<li><a class='tdot'>".$this->_curPage." / ".$this->totalPage()."</a></li>";
				}
				elseif ($option == 'Split') {
					if ($this->totalPage() < 10) {
						while ($i++ < $this->totalPage()) {
							$active = null;
							if($this->_curPage == $i){
								$active = 'active';
								$href = null;
							}
							else{
								$href = "href='$curLink/page-$i'";
							}
							$this->_pageList.="<li class='$active'><a $href class='page $active'>$i</a></li>";
						}
					}
					elseif ($this->_curPage < 5) {
						while ($i++ < 5) {
							$active = null;
							if($this->_curPage == $i){
								$active = 'active';
								$href = null;
							}
							else{
								$href = "href='$curLink/page-$i'";
							}
							$this->_pageList.="<li class='$active'><a $href class='page $active'>$i</a></li>";
						}
						$this->_pageList.="<li><a class='tdot'>...</a></li>";
						$this->_pageList.="<li><a href='$curLink/page-".($this->totalPage()-1)."'>".($this->totalPage()-1)."</a></li>";
						$this->_pageList.="<li><a href='$curLink/page-".$this->totalPage()."'>".$this->totalPage()."</a></li>";
					}
					elseif ($this->_curPage <= $this->totalPage() - 4) {
						$this->_pageList.="<li><a href='$curLink/page-1'>1</a></li>";
						$this->_pageList.="<li><a href='$curLink/page-2'>2</a></li>";
						$this->_pageList.="<li><a class='tdot'>...</a></li>";
						for ($i=$this->_curPage-1; $i <= $this->_curPage+1; $i++) { 
							$active = null;
							if($this->_curPage == $i){
								$active = 'active';
								$href = null;
							}
							else{
								$href = "href='$curLink/page-$i'";
							}
							$this->_pageList.="<li class='$active'><a $href class='page $active'>$i</a></li>";
						}
						$this->_pageList.="<li><a class='tdot'>...</a></li>";
						$this->_pageList.="<li><a href='$curLink/page-".($this->totalPage()-1)."'>".($this->totalPage()-1)."</a></li>";
						$this->_pageList.="<li><a href='$curLink/page-".$this->totalPage()."'>".$this->totalPage()."</a></li>";
					}
					else{
						$this->_pageList.="<li><a href='$curLink/page-1'>1</a></li>";
						$this->_pageList.="<li><a href='$curLink/page-2'>2</a></li>";
						$this->_pageList.="<li><a class='tdot'>...</a></li>";
						for ($i=$this->totalPage()-4; $i <= $this->totalPage(); $i++) { 
							$active = null;
							if($this->_curPage == $i){
								$active = 'active';
								$href = null;
							}
							else{
								$href = "href='$curLink/page-$i'";
							}
							$this->_pageList.="<li class='$active'><a $href class='page $active'>$i</a></li>";
						}
					}
				}
				else{
					return false;
				}

				if ($this->_curPage == $this->totalPage()) {
					$disable = 'disabled';
					$hrefnext = null;
					$hreflast = null;
				}
				else{
					$disable = null;
					$hrefnext = "href='$curLink/page-".($this->_curPage + 1)."'";
					$hreflast = "href='$curLink/page-".($this->totalPage())."'";
				}
				$this->_pageList .= "<li class='$disable'><a class='next' $hrefnext>Next</a></li>";
				$this->_pageList .= "<li class='$disable'><a class='last' $hreflast>Last</a></li>";

				$this->_pageList .= '</ul>';
			}
			return $this->_pageList;
		}
	}
?>