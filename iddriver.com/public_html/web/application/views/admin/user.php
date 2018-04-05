<aside class="right-side"> 
  <!-- Content Header (Page header) --><br />

<h4>จัดการผู้ใช้งาน</h4>  <br />

  <!-- Main content -->
  <section class="content"> 
    
    <!-- row -->
    
    <div class="row">
        <?php 
	echo link_tag('css/kendo/kendo.common.min.css');
	echo link_tag('css/kendo/kendo.flat.min.css');
	echo link_tag('css/kendo/kendo.dataviz.flat.min.css');
	echo link_tag('css/kendo/kendo.default.css');
?>

    <script src="<?php echo base_url()?>js/kendo.all.min.js"></script>
    
<div id="content" class="col-lg-12 col-sm-12"> 
  <!-- content starts -->
 
  <div> 
    <!-- Detail -->
    
    <div class="row" style="width:100%">
    	<div class="col-md-12 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            รายชื่อผู้ใช้งาน
                        </div>
                        <div class="panel-body">
                        	<div id="grid"></div>
                     	</div>   
                    </div>
        </div>
    </div>
    
    
    <!-- Detail --> 
  </div>
</div>
            <script>
				var user_level = [{
					"value": "0","text": "ผู้ดูแลระบบ"
				},{
					"value": "1","text": "พนักงานทั่วไป"
				},{
					"value": "2","text": "บัญชี"
				}];
				
				var user_branch = [{
					"value": "","text": "กรุณาเลือกสาขา"
				},{
					"value": "สาขาขอนแก่น","text": "สาขาขอนแก่น"
				},{
					"value": "สาขาบายพาส (ขอนแก่น)","text": "สาขาบายพาส (ขอนแก่น)"
				},{
					"value": "สาขาลำลูกกา (ปทุมธานี)","text": "สาขาลำลูกกา (ปทุมธานี)"
				},{
					"value": "สาขามหาสารคาม","text": "สาขามหาสารคาม"
				}];
                $(document).ready(function () {
                    var crudServiceBaseUrl = "<?php echo base_url()?>index.php/user",
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                    url: crudServiceBaseUrl + "/list_user?callback",
                                    dataType: "jsonp"
                                },
                                update: {
                                    url: crudServiceBaseUrl + "/user_update",
                                    dataType: "jsonp"
                                },
                                destroy: {
                                    url: crudServiceBaseUrl + "/user_delete",
                                    dataType: "jsonp"
                                },
                                create: {
                                    url: crudServiceBaseUrl + "/user_insert",
                                    dataType: "jsonp"
                                },
                                parameterMap: function(options, operation) {
                                    if (operation !== "read" && options.models) {
                                        return {models: kendo.stringify(options.models)};
                                    }
                                }
                            },
                            batch: true,
                            pageSize: 20,
                            schema: {
                                model: {
                                    id: "ID",
                                    fields: {
                                        ID: { editable: false, nullable: true },
                                        name: { validation: { required: true } },
										username: { validation: { required: true } },
										level: { validation: { required: true } ,field: "level", values: user_level },
										branch: { validation: { required: true } ,field: "branch", values: user_branch },
										password: { },
                                        
                                    }
                                }
                            }
                        });

                    $("#grid").kendoGrid({
                        dataSource: dataSource,
						sortable: true,
						filterable: {
                            extra: false,
                            operators: {
                                string: {
									contains : "ค้นหาคำ"
                                }
                            }
                        },
                        pageable: true,
                        toolbar: ["create"],
                        columns: [
                            { field:"name", title: "<div align='center'>ชื่อ-นามสกุล</div>" ,width:"20%"  },
							{ field:"username", title: "<div align='center'>ชื่อผู้ใช้งาน</div>" ,width:"20%"  },
							{ field:"level",values:user_level, title:"<div align='center'>กลุ่มผู้ใช้งาน</div>",width: "20%" },
							{ field:"branch",values:user_branch,title:"<div align='center'>สาขา</div>",width: "20%" },
							{ field: "password",  hidden: true, title:"<div align='center'>Password</div>" },
                            { command: ["edit", "destroy"], title: "<div align='center'>จัดการ</div>", width: "20%" }],
                        editable: "popup"
                    });
                });
            </script>
            
            
    </div>
    <!-- /.row -->
    
    
    <!-- /.row --> 
    
  </section>
  <!-- /.content --> 
</aside>
     <!-- DATA TABLE SCRIPTS -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
