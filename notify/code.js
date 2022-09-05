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
