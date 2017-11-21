        //         //SWEET ALERT

            function cadastro(){
            swal({
                text: "Usuario cadastrado com sucesso",
                icon: "success",
                });
            }




             //Data Table 1

            // $(document).ready(function(){
            //     $('#table-rs').DataTable()
            // });




        //Data Table 2
        $(function(){
            $("#table-rs").dataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Nenhum registro encontrado",
                    "info": "",
                    "infoEmpty": "Nenhum registro encontrado dos",
                    "infoFiltered": "_MAX_ inscritos ",
                    "oPaginate": {
                            "sFirst": "Primeiro",
                            "sLast": "Ultimo",
                            "sNext": "Próximo",
                            "sPrevious": "Antes"
                            },
                    "sSearch": "Pesquisar:",
                    "ajax": "data/arrays.txt",
                    "deferRender": true,


                }
                });
            });


         $(document).ready(function(e){
                    $('.btn_modal').click(function(){
                        $('#modal').fadeIn(100);

                    });


                    $('.fechar, #modal').click(function(event){
                        if(event.target !== this){
                            return;
                        }
                        $('#modal').fadeOut(100);
                    });

                    $('#exampleModal').on('show.bs.modal', function (event) {
                          var button = $(event.relatedTarget) // Button that triggered the modal
                          var view = button.data('view') // Extract info from data-* attributes
                          var id = null
                          var title = button.data('title')

                          if (button.data('id')){
                            id = button.data('id')
                          }

                        $.ajax({
                            url: view,
                            data:{
                                id:id
                            },
                            success: function(data){
                                var modal = $('#exampleModal')
                                modal.find('.modal-title').text(title)
                                modal.find('.modal-body').html(data)
                            }
                        })

                          //console.log(view)
                          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                          /*var modal = $(this)
                          modal.find('.modal-title').text('New message to ' + recipient)
                          modal.find('.modal-body input').val(recipient)*/
                    })
                     $('#exampleModal').on('hidden.bs.modal', function (event) {
                            window.location.reload()
                     })
                });





