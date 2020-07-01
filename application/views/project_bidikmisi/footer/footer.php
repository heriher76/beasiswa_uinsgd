	<!--Footer-->
	<footer class="main-footer">
		<strong>Support by &copy; 2020 <a href="http://ptipd.uinsgd.ac.id/" target="_blank" style="color: white;">PTIPD - UIN Sunan Gunung Djati Bandung</a>.</strong> All rights reserved.
	</footer>
	<!--End Footer-->

	<!--Script javascript-->

	<!--include chart.min.js-->
	<script type="text/javascript" src="<?=base_url('assets/adminlte/plugins/chartjs/Chart.min.js'); ?>"></script>

	<!--include js buatan sendiri-->
	<script type="text/Javascript" src="<?=base_url('assets/js/script.js'); ?>"></script>

	<!--Jquery.min.js-->
	<script type="text/Javascript" src="<?=base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>

	<!--main.js-->
	<script type="text/Javascript" src="<?=base_url('assets/js/main.js'); ?>"></script>

	<!--include jquery-->
	<script type="text/Javascript" src="<?=base_url('assets/js/jquery-3.3.1.js'); ?>"></script>

	<!--DataTables-->
	<script type="text/Javascript" src="<?=base_url('assets/t/d/js/jquery.dataTables.min.js'); ?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/t/d/js/dataTables.bootstrap.min.js');?>"></script>
	<script type="text/Javascript" src="<?=base_url('assets/row/js/dataTables.rowReorder.min.js'); ?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/responsive/js/dataTables.responsive.min.js'); ?>"></script>

	<script type="text/javascript" src="<?=base_url('assets/admin/bower_components/jquery/jquery.min.js'); ?>"></script>

	<!--include bootstrap.min.js-->
	<script type="text/Javascript" src="<?=base_url('assets/bootstrap3.3.7/js/bootstrap.min.js'); ?>"></script>

	<!--include datepicker bootstrap.js-->
	<script type="text/Javascript" src="<?=base_url('assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>

	<!-- include datetimepicker -->
	<script type="text/Javascript" src="<?=base_url('assets/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js'); ?>"></script>


	<!--include js app-->
	<script src="<?=base_url('assets/adminlte/dist/js/app.min.js'); ?>" type="text/javascript"></script>

	<script type="text/Javascript">
			function hapus_data() {
				var tanya = confirm("Anda Yakin Ingin Hapus Data ?");
				if(tanya == false){
					return false;
				}else if(tanya == true){
					return true;
				}
			}

			function hapus_data_permanen(){
				var tanya = confirm("Data Akan dihapus secara Permanen, Anda Yakin Hapus Data ? ");
				if(tanya == false){
					return false;
				}else if(tanya == true){
					return true;
				}
			}

		    $(".form_datetime").datetimepicker({
		        format: "yyyy-mm-dd hh:ii:ss"
		    });

			//server side data nim
			$(document).ready(function(){
				$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
	            {
	                return {
	                    "iStart": oSettings._iDisplayStart,
	                    "iEnd": oSettings.fnDisplayEnd(),
	                    "iLength": oSettings._iDisplayLength,
	                    "iTotal": oSettings.fnRecordsTotal(),
	                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
	                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
	                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
	                };
	            };

	            var t = $("#mytable").dataTable({
	                initComplete: function() {
	                    var api = this.api();
	                    $('#mytable_filter input')
	                            .off('.DT')
	                            .on('keyup.DT', function(e) {
	                                if (e.keyCode == 13) {
	                                    api.search(this.value).draw();
	                        }
	                    });
	                },
	                oLanguage: {
	                    sProcessing: "loading..."
	                },
	                processing: true,
	                serverSide: true,
	                ajax: {"url": "<?=base_url('Admin/json_data_report'); ?>", "type": "POST"},
	                columns: [
	                    {
	                        "data": "nim",
	                        "orderable": false
	                    },
	                    {"data": "nim"},
	                    {"data": "nama_mahasiswa"},
	                    {"data": "jenis_kelamin"},
	                    {"data": "angkatan"},
	                    {"data": "view"}
	                ],
	                order: [[1, 'asc']],
	                rowCallback: function(row, data, iDisplayIndex) {
	                    var info = this.fnPagingInfo();
	                    var page = info.iPage;
	                    var length = info.iLength;
	                    var index = page * length + (iDisplayIndex + 1);
	                    $('td:eq(0)', row).html(index);
	                },
	                rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	            });
			});
			//end server side data nim

	   		//dataTabel
	   		$(document).ready(function() {
	   			var table = $('#data_server_side').DataTable({
	   				"processing": true,
		            "serverSide": true,
		            "ordering"  : true,
		            "order": [],

		            "ajax": {
		                "url": "<?php echo site_url('Auth1/get_data_user')?>",
		                "type": "POST"
		            },


		            "columnDefs": [
		            {
		                "targets" : [0],
		                "orderable": false,
		            },
		            ],

		            rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

	   		$(document).ready(function() {
	   			var table = $('#data_server_side2').DataTable({
	   				"processing": true,
		            "serverSide": true,
		            "ordering"  : true,
		            "order": [],

		            "ajax": {
		                "url": "<?php echo site_url('Auth0/get_data_user')?>",
		                "type": "POST"
		            },


		            "columnDefs": [
		            {
		                "targets" : [0],
		                "orderable": false,
		            },
		            ],

		            rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

	   		$(document).ready(function() {
	   			var table = $('#pendaftar').DataTable({
	   			    rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

	   		$(document).ready(function() {
	   			var table = $('#pendaftar2').DataTable({
	   			    rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

	   		$(document).ready(function() {
	   			var table = $('#pendaftar3').DataTable({
	   			    rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

	   		$(document).ready(function() {
	   			var table = $('#daftar').DataTable({
	   			    rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

            $(document).ready(function() {
	   			var table = $('#tahun').DataTable({
	   			    rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

	   		$(document).ready(function() {
	   			$('#tabel_utama').DataTable({
	   			    rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});

	   		$(document).ready(function() {
	   			$('#data_kuota').DataTable({
	   			    rowReorder: {
		        	selector: 'td:nth-child(2)'
    		        },
    		        responsive: true
	   			});
	   		});
			//end dataTabel

	   		//notif
            window.setTimeout(function() { $(".notif").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 6500);
            //End notif

	        //function untuk identitas diri
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading').hide();

	        	$('#provinsi').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota').hide(); //sembunyikan combobox kota
	        		$('#loading').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk identitas diri

	        //function untuk Data ortu
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading2').hide();

	        	$('#provinsi2').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota2').hide(); //sembunyikan combobox kota
	        		$('#loading2').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi2').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading2').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota2').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk Data ortu

	        //function untuk Data sekolah
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading3').hide();

	        	$('#provinsi3').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota3').hide(); //sembunyikan combobox kota
	        		$('#loading3').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi3').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading3').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota3').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk Data sekolah

	        //function untuk Data pesantren
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading4').hide();

	        	$('#provinsi4').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota4').hide(); //sembunyikan combobox kota
	        		$('#loading4').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi4').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading4').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota4').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk Data pesantren

	        //function untuk view_sementara
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading6').hide();

	        	$('#provinsi6').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota6').hide(); //sembunyikan combobox kota
	        		$('#loading6').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi6').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading6').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota6').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk view_sementara

	        //function untuk view_sementara
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading8').hide();

	        	$('#provinsi7').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota7').hide(); //sembunyikan combobox kota
	        		$('#loading8').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi7').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading8').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota7').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk view_sementara

	        //function untuk view_sementara
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading9').hide();

	        	$('#provinsi8').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota8').hide(); //sembunyikan combobox kota
	        		$('#loading9').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi8').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading9').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota8').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk view_sementara

	        //function untuk view_sementara
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading10').hide();

	        	$('#provinsi9').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota9').hide(); //sembunyikan combobox kota
	        		$('#loading10').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listKota'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi9').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading10').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota9').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function untuk view_sementara

	        //function jurusan
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading5').hide();

	        	$('#fakultas').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#jurusan').hide(); //sembunyikan combobox kota
	        		$('#loading5').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listJurusan'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_fakultas : $('#fakultas').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading5').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#jurusan').html(response.list_jurusan).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function jurusan

	        //function jurusan
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading7').hide();

	        	$('#fakultas2').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#jurusan2').hide(); //sembunyikan combobox kota
	        		$('#loading7').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('C_mhs/listJurusan'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_fakultas : $('#fakultas2').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading7').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#jurusan2').html(response.list_jurusan).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function jurusan

	        //function jurusan
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading11').hide();

	        	$('#fakultas3').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#jurusan3').hide(); //sembunyikan combobox kota
	        		$('#loading11').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('Auth1/listJurusan'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_fakultas : $('#fakultas3').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading11').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#jurusan3').html(response.list_jurusan).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function jurusan

	         //function jurusan
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loading12').hide();

	        	$('#fakultas4').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#jurusan4').hide(); //sembunyikan combobox kota
	        		$('#loading12').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('Auth1/listJurusan'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_fakultas : $('#fakultas4').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loading12').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#jurusan4').html(response.list_jurusan).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //End function jurusan

	        //function report provinsi
	        $(document).ready(function(){ //ketika halaman sudah selesai di load
	        	//menyembunyikan loading
	        	$('#loadingloli').hide();

	        	$('#provinsi10').change(function(){ //ketika user mengganti dan memilih data provinsi
	        		$('#kota_kota').hide(); //sembunyikan combobox kota
	        		$('#loadingloli').show(); //memunculkan loading.gif

	        		$.ajax({
	        			type: "POST", //method pengiriman data bisa dengan GET atau POST
	        			url: "<?=base_url('Auth0/listprovinsi'); ?>", //menuju URL function yang ada dicontroller C_mhs
	        			data: {id_propinsi : $('#provinsi10').val()}, //data yang akan dikirim ke file yg dituju
	        			dataType: "json",
	        			beforeSend: function(e){
	        				if(e && e.overrideMimeType){
	        					e.overrideMimeType("application/json;charset=UTF-8");
	        				}
	        			},
	        			success: function(response){ //ketika proses pengiriman berhasil
	        				setTimeout(function(){
		        				$('#loadingloli').hide(); //sembunyikan loading

		        				//set isi dengan combobox kota
		        				//lalu munculkan kembali combobox kotanya
		        				$('#kota_kota').html(response.list_kota).show();
		        			}, 3000);
	        			},
	        			error: function (xhr, ajaxOptions, thrownError){ //ketika ada error
	        				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); //munculkan alert error
	        			}
	        		});
	        	});
	        });
	        //end function report provinsi

			//function generate tanggal lahir
			$(document).ready(function () {
				$('.tanggal').datepicker({
					format: "yyyy-mm-dd",
					autoclose:true
				});
			});
		</script>
        <!--End Script javascript-->
