<script  type="text/javascript">
    $(function(){
        $modal =new ModalClass();
        $(document).on('click','#add_material',function(){
            $modal.setTitleModal("Add Material");
            $modal.showModal();
            $services.callApi('<?=site_url('Materials/materials_form');?>','get',null).done(
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


        $(document).on('submit','#materials_form',function(e){
            e.preventDefault();

            $(this).uploadFiles('<?=api_url?>catalogs/api/materials',this,'materials_form').done(function(response){
                if(response.status=="error"){
                    display_message(response.message,'danger',2000,'top','right','active-40');
                    if(response.validations){
                        fill_validations('materials_form',response.validations);
                    }
                }else if(response.status=="success"){
                    display_message(response.message,'primary',2000,'top','right','active-40');
                    $modal.closeModal();
                }else{
                    display_message(response.message,'danger',2000,'top','right','active-40');
                }
            }).fail(function(response){
                display_message('Error - Comunicación','danger',2000,'top','right','fas fa-close');
            });
        });
    });
</script>

