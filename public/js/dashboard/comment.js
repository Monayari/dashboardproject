function deleterecord(id) {
    
    
swal({

    title:'ایا از حذف مطمئن هستید',
    type:'error',
    confirmButtonClass:"btn-danger",
    confirmButtonText:"حذف",
    showCancelButton:true,

  
},

function(){

        $.ajax({
            url: "/dashboard/comment/" + id,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {

                _token : $('meta[name="csrf-token"]').attr('content'),
            },

                success: function(response) {
                $("#user-" + id).remove();


           Swal.fire(
            'حذف!',
            'حذف با موفقیت انجام شد!',
            'success'
        )

}

        });
});
}

//insert comment

function insertcomment()
{
    $("#commentform").submit(function(e){

        e.preventDefault();

  $("#save").text('ثبت شد')

  let  is_replay_to_id=$("#is_replay_to_id").val();
  let comment=$("#comment").val();
   let enable=$("#enable").val();

    let _token=  $('meta[name="csrf-token"]').val();


      $.ajax({

   url:"/dashboard/comment",
    type:"POST",

     headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },


   data:{
      is_replay_to_id: is_replay_to_id,
      comment:comment,
    enable:enable,

      _token : $('meta[name="csrf-token"]').attr('content'),


    },
   success:function(response)
   {
       if(response)
      {

                                        </td>
           $("#commenttable tbody").prepend('<tr><td>'+response.id+'</td><td>'+response.is_replay_to_id+'</td><td>'+response.comment+'</td><td>'+response.enable+'</td><td>'+response.user_id+'</td><td><button onclick="deleterecord({{ $comment->id }})"><i class="material-icons">delete_sweep</i></button></td></tr>');
            $("#commentform")[0].reset();
           $("#userModal").modal('hide');

           Swal.fire(
            'ثبت!',
            'کامنت با موفقیت ثبت شد!',
            'success'
        )
       }
   }
  });
      });
}


//update record
function editrecord(id)
{
    $.get('/dashboard/comment/'+id,function(comment){

       $("#id").val(comment.id);
       $("#is_replay_to_id2").val(comment.is_replay_to_id);
       $("#comment2").val(comment.comment);
       $("#enable2").val(comment.enable);

       $("#CommentEditModal").modal('toggle');

    });
}

function update(){
$("#commentformedit").submit(function(e){

e.preventDefault();
let id=$("#id").val();
let  is_replay_to_id=$("#is_replay_to_id2").val();
let comment=$("#comment2").val();
 let enable=$("#enable2").val();

  let _token=  $('meta[name="csrf-token"]').val();


  $.ajax({

    url:"/dashboard/comment",
     type:"PUT",

      headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },


    data:{
        id:id,
       is_replay_to_id: is_replay_to_id,
       comment:comment,
     enable:enable,


       _token : $('meta[name="csrf-token"]').attr('content'),


     },

             success:function(response)
             {

$('#user-'+response.id+' td:nth-child(1)').html(response.id);
                  $('#user-'+response.id+' td:nth-child(2)').html(response.is_replay_to_id);
                  $('#user-'+response.id+' td:nth-child(3)').html(response.comment);
                  $('#user-'+response.id+' td:nth-child(4)').html(response.enable);
                  $('#user-'+response.id+' td:nth-child(5)').html(response.user_id);

                 $("#CommentEditModal").modal('hide');
                 $("#commentformedit")[0].reset();


           Swal.fire(
            'ویرایش!',
            'کامنت با موفقیت ویرایش شد!',
            'success'
        )

             }
           });
});
}
