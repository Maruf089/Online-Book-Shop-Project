<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon">Search</span>
        <input type="search" name="search_text" id="search_text" placeholder="Search by category..." onkeyup="fun()">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </div>
    </div>
    <br><br><br><br><br>
    <div id="result"></div>
  </div>
  </body>
</html>

<script>
$(document).ready(function(){
  $('#search_text').keyup(function(){
    var txt=$(this).val();
    if(txt !='')
    {
      $.ajax({
        url:"fetch.php",
        method:"post",
        data:{search:txt},
        dataType:"text",
        success:function(data)
        {
          $('#result').html(data);
        }
      });
    }
    else
    {
      $('#result').html('');
      $ajax({
        url:"fetch.php",
        method:"post",
        data:{search:txt},
        dataType:"text",
        success:function(data)
        {
          $('#result').html(data);
        }
      });
    }
  });
});
</script>
