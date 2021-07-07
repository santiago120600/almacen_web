<script  type="text/javascript">
    $(function(){
        $modal =new ModalClass();
        $(document).on('click','#add_user',function(){
            $modal.setTitleModal("Add User");
            $modal.showModal();
            $services.callApi('<?=site_url('users/user_form');?>','get',null).done(
                function(response){
                    $modal.setContentModal(response);
                }
            ).fail(function(error){
                display_message('Error - Comunicación','danger',2000,'top','right','fas fa-close');
                setTimeout(function(){
                    $modal.closeModal();
                },1000);
            });
        });


        $(document).on('submit','#user_form',function(e){
            e.preventDefault();
            var data_send =$(this).serialize();
            clearValidations('user_form');
            $services.callApi('<?=api_url?>users/api/web_users','post',data_send).done(function(response){
                if(response.status=="error"){
                    display_message(response.message,'danger',2000,'top','right','active-40');
                    if(response.validations){
                        fill_validations('user_form',response.validations);
                    }
                }else if(response.status=="success"){
                    display_message(response.message,'primary',2000,'top','right','active-40');
                    $modal.setContentModal('<h1>Usuario: '+response.data.user_email+'</h1><h1>Contraseña creada: '+response.data.key_password+'</h1>')
                }else{
                    display_message(response.message,'danger',2000,'top','right','active-40');
                }
            }).fail(function(){
                display_message('Error - Comunicación','danger',2000,'top','right','active-40');
            });
        });
    });
</script>