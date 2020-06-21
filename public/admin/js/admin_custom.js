 $(function () {
        if(typeof tags_select_value !== 'undefined'){             
        $('.select2').select2({}).select2('val', tags_select_value).trigger("change");       
        }
    
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    $('.text-editor').summernote();
  });
  

  $(document).ready(function() {

    if ($(".project-gallery-images").length > 0){
    $('.project-gallery-images').imageUploader();
    }
      
      
      
      
    $('#admin-project-form').validate({
        errorClass: "validity-error",
        validClass: "validity-success",
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            $('#is_active-error').css({
                display: 'inline-block',
                fontWeight: 'bolder'
            });
        },
        rules: {
            project_name: {
                required: true
            },
            project_location: {
                required: true
            }
        },
        messages: {
            project_name: {
                required: "Please enter your project name.",
                
            },
            project_location: {
                required: "Please enter your project location."
            }       
        }
    });
   
    
    $('.deleteProject').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var item = $(this).data('item');
        var selected_row = $(this);
        
        $.confirm({
            title: '',
            openAnimation: 'right',
            content: 'Are you sure you want to delete this '+item+'?',
            buttons: {
                confirm: function () {
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/delete_project',
                            data: {
                                'id': id
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                /*$('#payment_info_form').hide();
                                 $('#payment_error_msg').hide();
                                 $('#loading_icon').show();
                                 $('#loading_icon').html("<img src='"+base_url+"assets/images/loading.gif' class='row' style='margin-left:32%;'/>");*/
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $(selected_row).closest('tr').remove();
                                   


                                    //window.location.href = base_url + 'cart';
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                },
                cancel: function () {
                    //$.alert('Canceled!');
                }
                }
            });
        
        
    });



    $('.notifyUnsigned').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var pid = $(this).data('pid');
        
        $.confirm({
            title: '',
            openAnimation: 'right',
            content: 'Are you sure you want to notify this user?',
            buttons: {
                confirm: function () {
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/notify_user',
                            data: {
                                'id': id,
                                'pid': pid
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                /*$('#payment_info_form').hide();
                                 $('#payment_error_msg').hide();
                                 $('#loading_icon').show();
                                 $('#loading_icon').html("<img src='"+base_url+"assets/images/loading.gif' class='row' style='margin-left:32%;'/>");*/
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $.alert({
                                        title: 'Success!',
                                        content: 'Email sent successfully to the user.',
                                    });
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                },
                cancel: function () {
                    //$.alert('Canceled!');
                }
                }
            });
        
        
    });


    
     $('.project-img-delete').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var img = $(this).data('image');
        var item = $(this).data('item');
        var selected_row = $(this);
        
        $.confirm({
            title: '',
            openAnimation: 'right',
            content: 'Are you sure you want to delete this '+item+'?',
            buttons: {
                confirm: function () {
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/delete_project_image',
                            data: {
                                'id': id,
                                'img': img
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $(selected_row).closest('.project-gallery-image').remove();
                                   
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                },
                cancel: function () {
                    //$.alert('Canceled!');
                }
                }
            });
        
        
    });
    
    $('#admin-testimonial-form').validate({
        errorClass: "validity-error",
        validClass: "validity-success",
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            $('#is_active-error').css({
                display: 'inline-block',
                fontWeight: 'bolder'
            });
        },
        rules: {
            testimonial_name: {
                required: true
            },
            testimonial_designation: {
                required: true
            },
            testimonial_location: {
                required: true
            },
            testimonial_content: {
                required: true
            }
        },
        messages: {
               
        }
    });
    
    
    $('.deleteTestimonial').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var item = $(this).data('item');
        var selected_row = $(this);
        
        $.confirm({
            title: '',
            openAnimation: 'right',
            content: 'Are you sure you want to delete this '+item+'?',
            buttons: {
                confirm: function () {
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/delete_testimonial',
                            data: {
                                'id': id
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                /*$('#payment_info_form').hide();
                                 $('#payment_error_msg').hide();
                                 $('#loading_icon').show();
                                 $('#loading_icon').html("<img src='"+base_url+"assets/images/loading.gif' class='row' style='margin-left:32%;'/>");*/
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $(selected_row).closest('tr').remove();
                                   


                                    //window.location.href = base_url + 'cart';
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                },
                cancel: function () {
                    //$.alert('Canceled!');
                }
                }
            });
        
        
    });
    
    
     $('#admin-faq-form').validate({
        errorClass: "validity-error",
        validClass: "validity-success",
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            $('#is_active-error').css({
                display: 'inline-block',
                fontWeight: 'bolder'
            });
        },
        rules: {
            faq_question: {
                required: true
            },
            faq_answer: {
                required: true
            }
        },
        messages: {
               
        }
    });
    
    
    $('.deleteFaq').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var item = $(this).data('item');
        var selected_row = $(this);
        
        $.confirm({
            title: '',
            openAnimation: 'right',
            content: 'Are you sure you want to delete this '+item+'?',
            buttons: {
                confirm: function () {
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/delete_faq',
                            data: {
                                'id': id
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                /*$('#payment_info_form').hide();
                                 $('#payment_error_msg').hide();
                                 $('#loading_icon').show();
                                 $('#loading_icon').html("<img src='"+base_url+"assets/images/loading.gif' class='row' style='margin-left:32%;'/>");*/
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $(selected_row).closest('tr').remove();
                                   


                                    //window.location.href = base_url + 'cart';
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                },
                cancel: function () {
                    //$.alert('Canceled!');
                }
                }
            });
        
        
    });


    $('#admin-user-form').validate({
        errorClass: "validity-error",
        validClass: "validity-success",
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            $('#is_active-error').css({
                display: 'inline-block',
                fontWeight: 'bolder'
            });
        },
        rules: {
            user_firstname: {
                required: true
            },
            user_lastname: {
                required: true
            },
            user_email: {
                required: true,
                email:true
            },
             user_phone: {
                required: true
            },
            user_password: {
                required: true
            }
        },
        messages: {
               
        }
    });   


    $('#admin-user-form-update').validate({
        errorClass: "validity-error",
        validClass: "validity-success",
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            $('#is_active-error').css({
                display: 'inline-block',
                fontWeight: 'bolder'
            });
        },
        rules: {
            user_firstname: {
                required: true
            },
            user_lastname: {
                required: true
            },
            user_email: {
                required: true,
                email:true
            },
             user_phone: {
                required: true
            }
        },
        messages: {
               
        }
    });   


    $('.deleteUser').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var item = $(this).data('item');
        var selected_row = $(this);
        
        $.confirm({
            title: '',
            openAnimation: 'right',
            content: 'Are you sure you want to delete this '+item+'?',
            buttons: {
                confirm: function () {
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/delete_user',
                            data: {
                                'id': id
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                /*$('#payment_info_form').hide();
                                 $('#payment_error_msg').hide();
                                 $('#loading_icon').show();
                                 $('#loading_icon').html("<img src='"+base_url+"assets/images/loading.gif' class='row' style='margin-left:32%;'/>");*/
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $(selected_row).closest('tr').remove();
                                   


                                    //window.location.href = base_url + 'cart';
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                },
                cancel: function () {
                    //$.alert('Canceled!');
                }
                }
            });
        
        
    });



    $('.investFormButton').click(function (event) {
        event.preventDefault();
        var project = $('#invest_project_id').val();
        var user =$('#invest_user_id').val();
        var amount =$('#invest_amount').val();
        if(amount==''){
            $.alert({
                title: 'Error!',
                content: 'Please enter amount.',
            });     

        } else if ($('#terms-conditions').not(':checked').length) {
            $.alert({
                title: 'Error!',
                content: 'Please accept Terms & Conditions.',
            });     

        } else {

        
                     $('#interestedModal').modal('hide');
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/interested_invest',
                            data: {
                                'project': project,
                                'user': user,
                                'amount': amount
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $.alert({
                                        title: 'Success!',
                                        content: 'Thank you for showing your interest. We will contact you soon.',
                                    });

                                    window.location.href = $('#sp_base_url').val() + '/documents';
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                    }
        
    });   






    $('.interested').click(function (event) {
        event.preventDefault();
        var project = $(this).data('project');
        var user = $(this).data('user');
        $('#invest_project_id').val(project);
        $('#invest_user_id').val(user);

        $('#interestedModal').modal('show');
        
        
    });   
    
    $('.updateReturn').click(function (event) {
        event.preventDefault();
        var project = $(this).data('project');
        var user = $(this).data('user');
        var amount = $(this).data('amount');
        $('#invest_project_id').val(project);
        $('#invest_user_id').val(user);
        $('#return_amount').val(amount);
        $('#returnAmountModal').modal('show');
        
        
    });  
    
    
     $('.returnFormButton').click(function (event) {
        event.preventDefault();
        var project = $('#invest_project_id').val();
        var user =$('#invest_user_id').val();
        var amount =$('#return_amount').val();
        if(amount==''){
            $.alert({
                title: 'Error!',
                content: 'Please enter amount.',
            });     

        }  else {

        
                     $('#returnAmountModal').modal('hide');
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/return_invest',
                            data: {
                                'project': project,
                                'user': user,
                                'amount': amount
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $.alert({
                                        title: 'Success!',
                                        content: 'Updated successfully.',
                                    });

                                    location.reload();
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                    }
        
    });   
    


    $('#admin-tag-form').validate({
        errorClass: "validity-error",
        validClass: "validity-success",
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            $('#is_active-error').css({
                display: 'inline-block',
                fontWeight: 'bolder'
            });
        },
        rules: {
            tag_name: {
                required: true
            }
        },
        messages: {
               
        }
    });


    $('.deleteTag').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var item = $(this).data('item');
        var selected_row = $(this);
        
        $.confirm({
            title: '',
            openAnimation: 'right',
            content: 'Are you sure you want to delete this '+item+'?',
            buttons: {
                confirm: function () {
                     $.ajax({
                            type: 'POST',
                            url: $('#sp_base_url').val() + '/ajax/delete_tag',
                            data: {
                                'id': id
                            },
                            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
                            beforeSend: function (xhr, plainObject) {
                                /*$('#payment_info_form').hide();
                                 $('#payment_error_msg').hide();
                                 $('#loading_icon').show();
                                 $('#loading_icon').html("<img src='"+base_url+"assets/images/loading.gif' class='row' style='margin-left:32%;'/>");*/
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    $(selected_row).closest('tr').remove();
                                   


                                    //window.location.href = base_url + 'cart';
                                } else {
                                }
                                //console.log(data);
                            }
                        });
                },
                cancel: function () {
                    //$.alert('Canceled!');
                }
                }
            });
        
        
    });

    
  });
  