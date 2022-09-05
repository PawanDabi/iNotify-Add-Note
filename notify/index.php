<?php include 'connections.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Notify!</title>
    <link rel="stylesheet" href="/notify/style.css">
  </head>
  <body>
    <!-- Button trigger modal -->
      <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
        Edit Modal
      </button>-->
      <!-- Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Note Here.. </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="formmodal" action="/notify/index.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="snoEdit" id="snoEdit" >
              <div class="form-group">
                <label for="title"> <b>Edit Note Title: </b></label>
                <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp" placeholder="Enter Note Title..">
              </div>
              <div class="form-group">
              <label for="desc"><b>Edit Note Discription:</b></label>
              <textarea class="form-control" id="discriptionEdit" name="discriptionEdit" rows="6" placeholder="Enter Note Discription.."></textarea>
            </div>
              <!--<button type="submit" class="btn btn-primary">update Note</button>-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="index.php">iNotify</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" id="nav-link1" href="index.php">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active">
           <a class="nav-link" id="nav-link1"href="contact.php">Contact Us.</a>
         </li>
       </ul>
     </div>
    </nav>
<?php include 'alerts.php' ?>
    <div class="container my-5">
      <h1 class="notify" >iNotify-Add Notes.</h1>
      <hr>
      <br>
      <form action="/notify/index.php" method="POST">
      <div class="form-group">
        <label for="title"><b> Note Title:</b></label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter Note Title...">
      </div>
      <div class="form-group">
      <label for="desc"><b>Note Discription:</b></label>
      <textarea class="form-control" id="discription" name="discription" rows="5" placeholder="Enter Note Discription..."></textarea>
    </div>
      <button id="submit" type="submit" class="btn btn-primary">Add Note</button>
    </form>
    </div>
  <div class="container my-4">
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Title</th>
      <th scope="col">Discription</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM notes";
    $result=mysqli_query($conn,$sql);
    $sno=0;
    while($row=mysqli_fetch_assoc($result))
    {
      $sno++;
      echo "<tr>
        <th scope='row'>". $sno ."</th>
        <td>". $row['title'] ."</td>
        <td>". $row['discription']. "</td>
        <td><button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button>  <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button</td>
      </tr>";
    }
    ?>
  </tbody>
</table>

</div>
<hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>
    <script>
      edits=document.getElementsByClassName('edit');
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click", (e)=>{
          console.log("edit ",);
          tr=e.target.parentNode.parentNode;
          title=tr.getElementsByTagName("td")[0].innerText;
          discription=tr.getElementsByTagName("td")[1].innerText;
          console.log(title, discription);
          titleEdit.value=title;
          discriptionEdit.value=discription;
          snoEdit.value=e.target.id;
          console.log(e.target.id);
          $('#editModal').modal('toggle')
        })
      })

      deletes=document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element)=>{
        element.addEventListener("click", (e)=>{
          console.log("edit ",);
          sno=e.target.id.substr(1,);
          if(confirm("Are you sure you want to delete the note?"))
          {
            console.log("YES");
            window.location=`/notify/index.php?delete=${sno}`;
          }
          else {
            console.log("NO");
          }
        })
      })
    </script>
  </body>
</html>
