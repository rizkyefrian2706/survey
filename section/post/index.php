 <script>
         function save_soal2() {

                 var datas = <?php echo json_encode($dataLamp); ?>;
                 var hr = new XMLHttpRequest();
                 var url = "lib/pertanyaan_khusus_2.php";
                 datas.forEach(dt => {
                         var dtt = document.querySelectorAll('[name='+dt.id+']:checked').value;
                         console.log(dtt);
                 });

                 //  var vars = "usia=" + usia + "&pendidikan=" + pendidikan + "&pendapatan=" + pendapatan + "&profesi=" + profesi + "&responden=0" + "&token=0";
                 //  console.log(vars);
                 //  hr.open("POST", url, true);
                 //  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                 //  hr.onreadystatechange = function() {
                 //          if (hr.readyState == 4 && hr.status == 200) {
                 //                  console.log(hr.responseText);
                 //                  if (hr.responseText == "success") {
                 //                          ToastMaker("Responden Berhasil di Input!", 3000, {
                 //                                  valign: 'top',
                 //                                  classList: ["custom-border", "large-appearance"]
                 //                          });
                 //                  } else {
                 //                          ToastMaker("Responden Gagal di Input!", 3000, {
                 //                                  valign: 'top',
                 //                                  classList: ["custom-border", "large-appearance"]
                 //                          });
                 //                  }
                 //          }
                 //  }
                 //  hr.send(vars);

         }
 </script>