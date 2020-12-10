function remove(id){
    //var data=Object.assign({}, getRow(id));
    //var dataString=JSON.stringify(data);

    URL=window.location.origin+'/task/remove';
    console.log(id);
    $.ajax({
        type: 'POST',
        url: URL,
        data: {'id':id},
        error: function(){
            alert('Error');},
        success: function(resp){
            console.log(resp);
            
        },
        complete: function(data){
            window.location.reload();
            show_mesg('Removed');
        }
    });
}
        function getRow(id){   
            cells= document.getElementById('row'+id).cells;
            console.log(cells);
            arr=[];
            for (var i=0;i<cells.length-2;i++){
                arr[i]=cells[i].innerHTML;
            }
            console.log(arr);
            return arr;
            
        }
       /* function edit(id){
            var row=<?= json_encode($row);?>;
            alert(row['description']);
        }*/
    $(document).ready(function(){
        $('.edit').click(function(e){
            console.log(e);
            $('#row').attr('editable',true);
            $('.edit').css('background-color','green');
        });
    });
