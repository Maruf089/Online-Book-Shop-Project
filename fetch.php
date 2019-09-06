<?php
$connect=mysqli_connect("localhost","root", "", "book_store");
$output='';
$search=$_POST['search'];
$sql="SELECT * FROM category WHERE cat_nm LIKE '%".$search."%'";
$result=mysqli_query($connect, $sql);
if(mysqli_num_rows($result)>0)
{
  $output .='<h4 align="center">Search Result</h4>';
  $output .='div class="table-responsive">
      <table class="table table bordered">
          <tr>
            <th>Category Name</th>
          </tr>';
        while($row = mysqli_fetch_array($result))
        {
          $output .= '
            <tr>
               <td>'.$row["cat_nm"].'</td>
            </tr>
            ';
        }
        echo $output;
}
else
{
  echo 'Data Not Found';
}

?>
