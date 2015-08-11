<?php
class Pager
{
    function findStart($limit)////////lay trang hien hanh
    {   
        //Nếu người có tình nhập vào page=chuoi thì câu lệnh này sẽ kiểm tra !is_numeric($_GET['page']) có phải là số hay không
        if((!isset($_GET['page'])) || ($_GET['page'] == "1") || !is_numeric($_GET['page']) ) /*chưa chọn trang nào or chọn trang đầu tiên */
        {
            $start = 0;
            $_GET['page'] = 1; /*trang đầu tiên */
        }
        else
        {
            //dựa vào chuỗi querystring ví dụ http://localhost/nhatnam/phantrang.php?page=1
            $start = ($_GET['page']-1)*$limit;
        }
        return $start;
        
    }
    
    
    function findPages($count, $limit)///tong so trang
    {
        $pages = (($count % $limit) == 0)? $count / $limit:
        ceil($count / $limit); //lấy sàn của $count/$limit
        return $pages;
    }
    
    function pagesList($curpage, $pages)
    {
        $page_list = "";

        // In trang đầu tiên và những link tới trang trc 
        if(($curpage != 1) && ($curpage))
        {
            $page_list .= "<a href='".$_SERVER['REQUEST_URI']."&page=1'><span class ='border_text'>First</span></a>"." &nbsp;";
        }
        
        if(($curpage-1) > 0)
        {
            $page_list .= "<a href='".$_SERVER['REQUEST_URI']."&page=".($curpage-1)."'><span class ='border_text'>Prev</span></a>"." &nbsp;";
        }
        
        // In ra danh sách các trang và làm cho trang hiện tại dam hơn và mất link ở chân
        for ($i=1; $i<=$pages; $i++)
        {
            if ($i == $curpage)
            {
                $page_list .= "<span class ='border_text_active'>".$i."</span>&nbsp;";
            }
            else
            {
                $page_list .= "<a href='".$_SERVER['REQUEST_URI']. "&page=".$i."' ><span class ='border_text'>".$i."</span></a>&nbsp;";
            }
            $page_list .=" ";
        }
        
        // In link của trang tiếp theo và trang cuối cùng 
        
        
        if (($curpage+1) <= $pages)
        {
            $page_list .= "<a href='".$_SERVER['REQUEST_URI']."&page=".($curpage+1)."'><span class ='border_text'>Next</span></a> &nbsp;";
        }
        
            if (($curpage != $pages) && ($pages != 0) )
        {
            $page_list .= "<a href=\"".$_SERVER['REQUEST_URI']."&page=".$pages."\"><span class ='border_text'>Last</span></a>";
        }
    
        $page_list .= "\n";
           
        return $page_list;
    }
    
}  
?>