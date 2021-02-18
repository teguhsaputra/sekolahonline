 // "use strict";

// $(document).ready(function() {

    // codesnipet plugins ckeditor
    hljs.initHighlightingOnLoad();

    var is_user_logged_in = 0;
    var sedang_ujian = 0;

    // cek sudah login belum
    $.ajax({
        method: 'GET',
        url: site_url + '/login/data_onload',
        success: function(data) {
            var result = $.parseJSON(data);
            is_user_logged_in = result.is_user_logged_in;
            sedang_ujian      = result.sedang_ujian;
        },
        async: false
    });

    // tooltip
    $('[data-toggle="tooltip"]').tooltip({html:true});

    // nivoslider login
    if ($("#slider-login").length) {
        $('#slider-login').nivoSlider();
    }

    // timeago
    $.timeago.settings.strings.suffixAgo = "yang lalu";
    $.timeago.settings.strings.seconds   = "kurang dari semenit";
    $.timeago.settings.strings.minute    = "sekitar semenit";
    $.timeago.settings.strings.minutes   = "%d menit";
    $.timeago.settings.strings.hour      = "sekitar sejam";
    $.timeago.settings.strings.hours     = "sekitar %d jam";
    $.timeago.settings.strings.day       = "satu hari";
    $.timeago.settings.strings.days      = "%d hari";
    $("time.timeago").timeago();

    // fungsi yang dipanggil saat ajax success
    function on_ajax_success(xhr)
    {
        // logout kalo session expired
        if (xhr.responseText == "403 Forbidden.") {
            location.href = site_url + '/login/sess_expired';
        }

        //timeago
        try {
            $("time.timeago").timeago();
        } catch(e) {}
    }

    // panggil fungsi setelah ajax success
    $(document).ajaxComplete(function( event, xhr, settings ) {
        on_ajax_success(xhr);
    });

    // jika sudah login
    if (is_user_logged_in == 1) {

        function load_texteditor() {
            // jika ada class texteditor atau texteditor-simple
            if ($("textarea.texteditor").length || $("textarea.texteditor-simple").length) {
                try {
                    $('textarea.texteditor').ckeditor({
                        toolbarGroups : [
                            { name: 'clipboard', groups: [ 'clipboard', 'undo'] },
                            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                            { name: 'forms', groups: [ 'forms' ] },
                            { name: 'links', groups: [ 'links' ] },
                            { name: 'insert', groups: [ 'insert' ] },
                            { name: 'others', groups: [ 'others' ] },
                            '/',
                            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                            { name: 'colors', groups: [ 'colors' ] },
                            '/',
                            { name: 'styles', groups: [ 'styles' ] },
                            { name: 'about', groups: [ 'about' ] },
                            { name: 'document', groups: [ 'document', 'doctools', 'mode' ] },
                            { name: 'tools', groups: [ 'tools' ] }
                        ],
                        removeButtons : 'Save,NewPage,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Find,Replace,SelectAll,RemoveFormat,CopyFormatting,Language,CreateDiv,HorizontalRule,PageBreak,Iframe,About,Scayt,Flash,ckeditor_wiris_CAS',
                        extraPlugins : 'lineutils,widget,codesnippet,ckeditor_wiris,youtube,html5audio,video',
                        codeSnippet_theme : 'monokai',
                        allowedContent : true,
                        skin : 'office2013',
                    });

                    CKEDITOR.on('dialogDefinition', function (event)
                    {
                        var editor = event.editor;
                        var dialogDefinition = event.data.definition;
                        var dialogName = event.data.name;

                        var cleanUpFuncRef = CKEDITOR.tools.addFunction(function ()
                        {
                            // Do the clean-up of filemanager here (called when an image was selected or cancel was clicked)
                            $('#filemanager_iframe').remove();
                            $("body").css("overflow-y", "scroll");
                        });

                        var tabCount = dialogDefinition.contents.length;
                        for (var i = 0; i < tabCount; i++) {
                            var browseButton = dialogDefinition.contents[i].get('browse');

                            if (browseButton !== null) {
                                browseButton.hidden = false;
                                browseButton.onClick = function (dialog, i)
                                {
                                    editor._.filebrowserSe = this;
                                    var iframe = $("<iframe id='filemanager_iframe' class='fm-modal'/>").attr({
                                        src: base_url + 'assets/comp/RichFilemanager/index.html' + // Change it to wherever  Filemanager is stored.
                                            '?CKEditorFuncNum=' + CKEDITOR.instances[event.editor.name]._.filebrowserFn +
                                            '&CKEditorCleanUpFuncNum=' + cleanUpFuncRef +
                                            '&langCode=en' +
                                            '&CKEditor=' + event.editor.name
                                    });

                                    $("body").append(iframe);
                                    $("body").css("overflow-y", "hidden");  // Get rid of possible scrollbars in containing document
                                }
                            }
                        }
                    }); // dialogDefinition

                } catch(e) {}
            }
        }

        load_texteditor();
    }

    // area yang harus login dan tidak sedang ujian
    if (is_user_logged_in == 1 && sedang_ujian == 0) {

        // home
        if ($("#info-update-link").length) {
            // popup new version
            setTimeout(function() {
                $.ajax({
                    type: "GET",
                    url: site_url + '/ajax/get_data/elearning-dokumenary-feed',
                    success: function(data){
                        var values = $.parseJSON(data);
                        $.each(values.feed, function(i, val) {
                            $("#info-update").append("<tr><td><a href='"+val.link+"' target='_blank'>"+val.title+"</a></td></tr>");
                        });

                        if (values.urgent_info) {
                            $("#show-urgent-info").html(values.urgent_info);
                        }
                    }
                });
            }, 1000);
        }

        // count new data
        function count_new_data()
        {
            $.ajax({
                method: "GET",
                url: site_url + '/ajax/get_data/count_new_data',
                success: function (data) {
                    var result = $.parseJSON(data);

                    // new msg
                    if (result.new_msg > 0) {
                        $(".menu-count-new-msg").html("");
                        $(".menu-count-new-msg").html('<b class="label orange pull-right">' + result.new_msg + '</b>');
                    } else {
                        $(".menu-count-new-msg").html("");
                    }

                    // new update
                    if (result.new_update > 0) {
                        $(".menu-count-new-update").html("");
                        $(".menu-count-new-update").html('<b class="label orange pull-right">' + result.new_update + '</b>');
                    } else {
                        $(".menu-count-new-update").html("");
                    }

                    // pending siswa
                    if (result.pending_siswa > 0) {
                        $(".menu-count-pending-siswa").html("");
                        $(".menu-count-pending-siswa").html('<b class="label orange pull-right">' + result.pending_siswa + '</b>');
                    } else {
                        $(".menu-count-pending-siswa").html("");
                    }

                    // pending pengajar
                    if (result.pending_pengajar > 0) {
                        $(".menu-count-pending-pengajar").html("");
                        $(".menu-count-pending-pengajar").html('<b class="label orange pull-right">' + result.pending_pengajar + '</b>');
                    } else {
                        $(".menu-count-pending-pengajar").html("");
                    }

                    // pending laporan
                    if (result.unread_laporan > 0) {
                        $(".menu-count-unread-laporan").html("");
                        $(".menu-count-unread-laporan").html('<b class="label orange pull-right">' + result.unread_laporan + '</b>');
                    } else {
                        $(".menu-count-unread-laporan").html("");
                    }

                    // last login
                    if (result.last_login_list) {
                        if ($("#show-last-login-list").length) {
                            $("#show-last-login-list").html(result.last_login_list);
                        }
                    }

                },
                async: false
            });
        }

        // panggil count new data
        count_new_data();

        // get new message di percakapan
        function get_new_msg()
        {
            if ($("#active_msg_id").length) {
                var active_msg_id = $("#active_msg_id").val();

                $.ajax({
                    method: 'POST',
                    url: site_url + '/ajax/post_data/new_msg',
                    data: 'active_msg_id=' + active_msg_id,
                    success: function(data) {
                        if (data != '') {
                            $('#list-msg > tbody:last-child').append(data);
                        }
                    },
                    async: false
                });
            }
        }

        setInterval(function() {
            count_new_data();

            get_new_msg();
        }, 10000);

        // jika ada class datatable
        if ($(".datatable").length) {
            $('.datatable').dataTable({
                "language": {
                    "url": base_url + "assets/comp/datatables/old/lang.id.json"
                },
                "aaSorting" : [],
                "bAutoWidth": false,
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 0 ] }
                ]
                //"stateSave": true
                // "fnDrawCallback" : function( oSettings ) {

                // }
            });
        }
        
        // tambah jurnal mengajar
        if ($("#tanggal_buat").length) {
            $('#tanggal_buat').datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
            });
            
            var ts = Date($.now());
            $('#tanggal_saiki').val(
                moment().format('DD-MM-YYYY HH:mm:ss')
            );
        }
        
        // tanggal mengajar
        if ($("#tanggal_mengajar").length) {
            $('#tanggal_mengajar').datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
            });
        }

        // tanggal ujian
        if ($("#tanggal_ujian").length) {
            $('#tanggal_ujian').datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
            });
        }

        // tanggal awal list jurnal
        if($("#tanggal_between").length){
            $('#tanggal_between').daterangepicker({
                /*timePicker: false,
                timePickerIncrement: 30,
                */
                locale: {
                    format: 'DD/MM/YYYY'
                }
            })
        }

        // select2 plugin lama waktu infal
        if($("#select2").length){
            $('#select2').select2()
        }

        // select2 plugin infal kelas
        if($("#select3").length){
            $('#select3').select2()
        }
        
        // jam mengajar di jurnal mengajar saat load
        if($("#jam_mengajar").load){
            var ma_id = $("#jam_mengajar").children("option:selected").val();
            var ma = $("#jam_mengajar").children("option:selected").data("matapelajaran");
            var kelas = $("#jam_mengajar").children("option:selected").data("kelas");
            var tanggal_buat = $("#input_tanggal_buat").val();
            //$("#get_ma").val(selectedJamAjar);
            $("#get_ma").val(ma);
            $("#get_ma_id").val(ma_id);
            $("#get_tanggal_buat").val(tanggal_buat);
            $("#get_kelas").val(kelas);
        }
        
        $('#edit-absenjurnal').bind('submit', function () {
            $(this).find(':input').prop('disabled', false);
        });
        
        // jam mengajar di jurnal mengajar
        if($("#jam_mengajar").length){
            $("#jam_mengajar").change(function(){
                var selectedJamAjar = $(this).children("option:selected").val();
                var ma = $(this).children("option:selected").data("matapelajaran");
                var kelas = $(this).children("option:selected").data("kelas");
                //$("#get_ma").val(selectedJamAjar);
                $("#get_ma").val(ma);
                $("#get_kelas").val(kelas);
            });
        }
        
        if($("#nav-profile-tab").length){
            $("#nav-profile-tab").click(function(){
                var kelas_id = $("#get_kelas").val();
                //console.log(site_url+"/absenjurnal/add/" + kelas_id);
                
                $.ajax({
                    type : "POST",
                    url  : site_url + "/ajax/post_data/list_siswa",
                    data : "kelas_id=" + kelas_id,
                    success : function(data){
                        //console.log(data);
                        $('#data_siswa').html(data);
                    },
                    async: false
                });
                
            });
                
        }
        
        if($("#nav-profile-tab-2").length){
            $("#nav-profile-tab-2").click(function(){
                var kelas_id = $("#get_kelas").val();
                var tanggal_buat = $("#input_tanggal_buat").val();
                var ma_id = $("#jam_mengajar").children("option:selected").val();
                var ma_id = $("#jam_mengajar").children("option:selected").val();
                //console.log(site_url+"/absenjurnal/add/" + kelas_id);
                
                $.ajax({
                    type : "POST",
                    url  : site_url + "/ajax/post_data/list_siswa2",
                    data : {kelas_id:kelas_id,ma_id:ma_id,tanggal_buat:tanggal_buat},
                    success : function(data){
                        //console.log(data);
                        $('#data_siswa').html(data);
                    },
                    async: false
                });
                
            });
                
        }
        
        
        
        // jika ada class datatablejurnal
        if ($(".datatablejurnal").length) {
            $('.datatablejurnal').dataTable({
                "language": {
                    "url": base_url + "assets/comp/datatables/old/lang.id.json"
                },
                "dom" : 'Bfrtip',
                "buttons" : [
                {
                    text : 'Tambah Data',
                    className : 'btn btn-primary mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    action: function ( e, dt, button, config ) {
                        window.location = base_url+'index.php/absenjurnal/add';
                    }
                },
                {
                    extend : 'print',
                    className : 'btn btn-info mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    title: function(){
                    var printTitle = 'Jurnal Mengajar Guru';
                        return printTitle
                    },
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                    }
                },
                {
                    extend : 'excel',
                    text : 'Export Excel',
                    className : 'btn btn-success mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    title: function(){
                    var printTitle = 'Jurnal Mengajar Guru';
                        return printTitle
                    },
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                    }
                },
                {
                    text : '<i class="fas fa-search"></i> Pencarian Tanggal',
                    className : 'btn btn-dark mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button'),
                        $(node).attr('data-toggle','collapse'),
                        $(node).attr('data-target','#form-filter'),
                        $(node).attr('id','parameterpencarian')
                    }
                    /*,
                    action: function ( e, dt, button, config ) {
                        window.location = base_url+'index.php/absenjurnal/add';
                    }*/
                }],
                "aaSorting" : [],
                "bAutoWidth": false,
                "paging": false,
                "bInfo": false,
                "searching": false,
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 0 ] }
                ]
                /*,
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
        
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
                */
            });
        }

        // jika ada class datatablejurnal
        if ($(".datatablelessonplan").length) {
            $('.datatablelessonplan').dataTable({
                "language": {
                    "url": base_url + "assets/comp/datatables/old/lang.id.json"
                },
                "dom" : 'Bfrtip',
                "buttons" : [
                {
                    text : 'Tambah Data',
                    className : 'btn btn-primary mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    action: function ( e, dt, button, config ) {
                        window.location = base_url+'index.php/lessonplan/add';
                    }
                },
                {
                    extend : 'print',
                    className : 'btn btn-info mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    title: function(){
                    var printTitle = 'Lesson Plan';
                        return printTitle
                    },
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend : 'excel',
                    text : 'Export Excel',
                    className : 'btn btn-success mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    title: function(){
                    var printTitle = 'Lesson Plan';
                        return printTitle
                    },
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    text : '<i class="fas fa-search"></i> Pencarian Tanggal',
                    className : 'btn btn-dark mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button'),
                        $(node).attr('data-toggle','collapse'),
                        $(node).attr('data-target','#form-filter'),
                        $(node).attr('id','parameterpencarian')
                    }
                    /*,
                    action: function ( e, dt, button, config ) {
                        window.location = base_url+'index.php/absenjurnal/add';
                    }*/
                }],
                "aaSorting" : [],
                "bAutoWidth": false,
                "paging": false,
                "bInfo": false,
                "searching": false,
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 0 ] }
                ]
                /*,
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
        
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
                */
            });
        }

        // jika ada class datatablepresensikehadiran
        if ($(".datatablepresensikehadiran").length) {
            $('.datatablepresensikehadiran').dataTable({
                "language": {
                    "url": base_url + "assets/comp/datatables/old/lang.id.json"
                },
                "dom" : 'Bfrtip',
                "buttons" : [
                {
                    text : 'Tambah Data',
                    className : 'btn btn-primary mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    action: function ( e, dt, button, config ) {
                        window.location = base_url+'index.php/presensikehadiran/add';
                    }
                },
                {
                    extend : 'print',
                    footer : true,
                    className : 'btn btn-info mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    title: function(){
                    var printTitle = 'Presensi Kehadiran Guru';
                        return printTitle
                    },
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    extend : 'excel',
                    footer : true,
                    text : 'Export Excel',
                    className : 'btn btn-success mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button')
                    },
                    title: function(){
                    var printTitle = 'Presensi Kehadiran Guru';
                        return printTitle
                    },
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    text : '<i class="fas fa-search"></i> Pencarian Tanggal',
                    className : 'btn btn-dark mb-2',
                    init: function(api, node, config) {
                        $(node).removeClass('dt-button'),
                        $(node).attr('data-toggle','collapse'),
                        $(node).attr('data-target','#form-filter'),
                        $(node).attr('id','parameterpencarian')
                    }
                    /*,
                    action: function ( e, dt, button, config ) {
                        window.location = base_url+'index.php/absenjurnal/add';
                    }*/
                }],
                "aaSorting" : [],
                "bAutoWidth": false,
                "paging": false,
                "bInfo": false,
                "searching": false,
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 0 ] }
                ],
                /*
                drawCallback: function () {
                    var api = this.api();
                    $( api.table().footer() ).html(
                      api.column( 3, {page:'current'} ).data().sum()
                    );
                  }
                */
               
                /*
               "footerCallback": function ( row, data, start, end, display ) {
                    
                    var api = this.api(), data;
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };        
                    
                   TotalKehadiran = api
                   .column( 3, { page: 'current'} )
                   .data()
                   .reduce( function ( a, b ) {  
                        var x = parseFloat(a.match(/\d+/));
                        var y = parseFloat(b.match(/\d+/));
                        //var x = a.match(/\d+/);
                        console.log(x);
                        console.log(y);
                        return x + y;
                        //return a + b;
                    },0 ); 

                    TotalJumlahInfal = api
                   .column( 5, { page: 'current'} )
                   .data()
                   .reduce( function ( a, b ) {
                        var x = parseFloat(a.match(/\d+/)); 
                        var y = parseFloat(b.match(/\d+/));
                        return x + y;
                        //return a + b;
                    } );

                    $( api.column( 3 ).footer() ).html(
                         'Total Kehadiran : '+TotalKehadiran
                         //'aaaa'
                    );
                    $( api.column( 5 ).footer() ).html(
                        'Total Jumlah Jam Infal : '+TotalJumlahInfal
                        //'aaaa'
                   );
                    //var sum = api.column(3).sum(); 
                    console.log(TotalKehadiran);
                }
                */
                /*,
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
        
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
                */
            });
        }

        // nestedSortable kelas
        if ($("ol#kelas").length) {
            $('ol#kelas').nestedSortable({
                forcePlaceholderSize: true,
                handle: 'div',
                helper: 'clone',
                items: 'li',
                // opacity: .6,
                placeholder: 'placeholder',
                // revert: 250,
                tabSize: 25,
                tolerance: 'pointer',
                toleranceElement: '> div',
                maxLevels: 2,
                isTree: true,
                expandOnHover: 700,
                startCollapsed: true
            });

            $('#update-hirarki').click(function(){
                $.ajax({
                    type : "POST",
                    url : site_url + "/ajax/post_data/hirarki_kelas",
                    data : $('ol.sortable').nestedSortable('serialize'),
                    success : function(data){
                        $('#response_update').html('<span class="text-success pull-right"><i class="icon icon-ok"></i> Update hirarki kelas berhasil</span>');
                        setTimeout(function(){
                            $('#response_update').html('');
                        },3000);
                    },
                    async: false
                });
            });
        }

        $('#kelas-mapel-kelas-parent-kelas').on('change', function() {
            $.ajax({
                type : "POST",
                url  : site_url + "/ajax/post_data/get_subkelas",
                data : "parent_kelas_id=" + this.value,
                success : function(data){
                    $('#kelas-mapel-kelas-sub-kelas').html(data);
                },
                async: false
            });
        });

        $('#kelas_id').change(function(){
            $.ajax({
                type : "POST",
                url  : site_url + "/ajax/post_data/mapel_kelas",
                data : "kelas_id=" + this.value,
                success : function(data){
                    $('#mapel_kelas_id').html(data);
                },
                async: false
            });
        });

        // cekall mapel
        $(".checkAll").change(function () {
            $(".checkbox-mapel").prop('checked', $(this).prop("checked"));
        });

        // colorbox pengajar
        if ($(".pengajar-iframe").length) {
            $(".pengajar-iframe").colorbox({
                iframe:true,
                width:"430",
                height:"405",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".pengajar-iframe-2").length) {
            $(".pengajar-iframe-2").colorbox({
                iframe:true,
                width:"400",
                height:"205",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".pengajar-iframe-3").length) {
            $(".pengajar-iframe-3").colorbox({
                iframe:true,
                width:"500",
                height:"305",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".pengajar-iframe-4").length) {
            $(".pengajar-iframe-4").colorbox({
                iframe:true,
                width:"600",
                height:"605",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".pengajar-iframe-5").length) {
            $(".pengajar-iframe-5").colorbox({
                iframe:true,
                width:"450",
                height:"340",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".pengajar-iframe-6").length) {
            $(".pengajar-iframe-6").colorbox({
                iframe:true,
                width:"430",
                height:"450",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".pengajar-iframe-7").length) {
            $(".pengajar-iframe-7").colorbox({
                iframe:true,
                width:"600",
                height:"500",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        // colorbox siswa
        if ($(".siswa-iframe").length) {
            $(".siswa-iframe").colorbox({
                iframe:true,
                width:"400",
                height:"200",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".siswa-iframe-kelas-aktif").length) {
            $(".siswa-iframe-kelas-aktif").colorbox({
                iframe:true,
                width:"400",
                height:"200",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".siswa-iframe-2").length) {
            $(".siswa-iframe-2").colorbox({
                iframe:true,
                width:"400",
                height:"205",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".siswa-iframe-3").length) {
            $(".siswa-iframe-3").colorbox({
                iframe:true,
                width:"500",
                height:"305",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".siswa-iframe-4").length) {
            $(".siswa-iframe-4").colorbox({
                iframe:true,
                width:"600",
                height:"605",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".siswa-iframe-5").length) {
            $(".siswa-iframe-5").colorbox({
                iframe:true,
                width:"450",
                height:"340",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($("#siswa-edit-password").length) {
            $.colorbox({
                iframe:true,
                width:"500",
                height:"305",
                fixed:true,
                onClosed : function() {
                    location.href = site_url + '/login/pp';
                },
                href: $(".siswa-iframe-3").attr('href'),
                transition: "none"
            });
        }

        // materi
        if ($(".iframe-laporkan").length) {
            $(".iframe-laporkan").colorbox({
                iframe:true,
                width:"400",
                height:"300",
                fixed:true,
                overlayClose: true
            });
        }

        // pesan
        /*
        if ($('#msg-penerima').length) {
            $('#msg-penerima').tagsinput({
                allowDuplicates: false,
                typeahead: {
                    source: function(query) {
                        var results = [];
                        $.ajax({
                            method: "GET",
                            url: site_url + '/ajax/get_data/penerima?query=' + query,
                            success: function (data) {
                                results = $.parseJSON(data);
                            },
                            async: false
                        });

                        return results;
                    }
                },
                freeInput: false
            });
        }
        */
        
        if ($('#psn-penerima').length) {
                $('#psn-penerima').typeahead({
                        hint: true,
                        highlight: true,
                        minLength: 1
                    },
                    {
                    limit: 12,
                        async: true,
                        source: function (query, processSync, processAsync) {
                        return $.ajax({
                        url: site_url + '/ajax/get_data/penerima?query=' + query,
                            success: function (data) {
                                results = $.parseJSON(data);
                            }, 
                        type: 'GET',
                        data: {query: query},
                        dataType: 'json',
                        success: function (json) {
                            // in this example, json is simply an array of strings
                            return processAsync(json);
                        }
                        }); 
                        
                    }
                });
            }

        // filter pengajar
        function filter_pengajar_ch_uch_checkbox(source){
            checkboxes = document.getElementsByName('pengajar_id[]');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
              checkboxes[i].checked = source.checked;
            }
        }
        
        
        
        // pengumuman
        if ($("#pengumuman-tgl-tampil").length) {
			//console.log("AAAAA");
			//$('#pengumuman-tgl-tampil').dateRangePicker({
			$('#pengumuman-tgl-tampil').daterangepicker({
                //language: 'id'
				locale: {
                    format: 'DD/MM/YYYY'
                }
			});
        }

        // tambah siswa
        function username_default() {
            if (document.getElementById("default_username").checked) {
                var nis = $("#nis").val();
                if (nis == '') {
                    nis = new Date().getTime();
                }
                $("#username").val(nis + '@aa.sch.id');
            } else {
                $("#username").val('');
            }
        }

        function username_default_pengajar() {
            if (document.getElementById("default_username").checked) {
                var nip = $("#nip").val();
                if (nip == '') {
                    nip = new Date().getTime();
                }
                $("#username").val(nip + '@example.sch.id');
            } else {
                $("#username").val('');
            }
        }

        // filter siswa
        function filter_siswa_ch_uch_checkbox(source){
            checkboxes = document.getElementsByName('siswa_id[]');
            for(var i=0, n=checkboxes.length;i<n;i++) {
              checkboxes[i].checked = source.checked;
            }
        }

        if ($(".iframe-lihat-nilai").length) {
            $(".iframe-lihat-nilai").colorbox({
                iframe:true,
                width:"400",
                height:"200",
                fixed:true,
            });
        }
        
        $('#modal-default').on('show.bs.modal', function (e) {
            var table = $(e.relatedTarget).data('table')
            $('#iframe-pertanyaan', this).attr('src', table)
            //console.log(table)
        })
        
        $('#modal-default').on('hidden.bs.modal', function (e) {
            
            /*
            $("#iframe-pertanyaan").trigger("reset");
             $('#iframe-pertanyaan').attr('src', '');
            var iframe = document.getElementById('iframe-pertanyaan');
            iframe.src = iframe.src;//Reloads the Iframe
            */
            
            //$('#iframe-pertanyaan', this).attr('src', '')
            //$('#iframe-pertanyaan', this).attr('src', '')

            location.reload();
            
        })
        
        if ($(".iframe-pertanyaan, .iframe-pilihan").length) {
            $(".iframe-pertanyaan, .iframe-pilihan").colorbox({
                iframe:true,
                width:"800",
                height:"600",
                fixed:true,
                overlayClose: false,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".iframe-copy-pertanyaan").length) {
            $(".iframe-copy-pertanyaan").colorbox({
                iframe:true,
                width:"900",
                height:"600",
                fixed:true,
                overlayClose: false,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".iframe-koreksi-jawaban").length) {
            $(".iframe-koreksi-jawaban").colorbox({
                iframe:true,
                width:"700",
                height:"550",
                fixed:true,
                onClosed : function() {
                    location.reload();
                }
            });
        }

        if ($(".iframe-detail-jawaban").length) {
            $(".iframe-detail-jawaban").colorbox({
                iframe:true,
                width:"700",
                height:"600",
                fixed:true,
            });
        }

        if ($(".iframe-jawaban-sementara").length) {
            $(".iframe-jawaban-sementara").colorbox({
                iframe:true,
                width:"700",
                height:"600",
                fixed:true,
            });
        }

    }

// });
