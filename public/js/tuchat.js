var f_luc = parseInt(document.getElementById('dLuc').value);
var f_the = parseInt(document.getElementById('dThe').value);
var f_nhanh = parseInt(document.getElementById('dNhanh').value);
var f_tri = parseInt(document.getElementById('dTri').value);
var f_than = parseInt(document.getElementById('dThan').value);

var luc = 0;
var the = 0;
var nhanh = 0;
var tri = 0;
var than = 0;

var tong= 0;

var dtn = 0;

var el = document.getElementsByClassName('thuoctinh');



function tangdiem(){
   /* if (f_luc === null){
        f_luc = parseInt(document.getElementById('dLuc').value);
        f_the = parseInt(document.getElementById('dThe').value);
        f_nhanh = parseInt(document.getElementById('dNhanh').value);
        f_tri = parseInt(document.getElementById('dTri').value);
        f_than = parseInt(document.getElementById('dThan').value);
    }
*/

    if ((luc != 0)||(the != 0)||(nhanh != 0)||(tri !=0)||(than != 0)){
        luc = parseInt(document.getElementById('dLuc').value);
        the = parseInt(document.getElementById('dThe').value);
        nhanh = parseInt(document.getElementById('dNhanh').value);
        tri = parseInt(document.getElementById('dTri').value);
        than = parseInt(document.getElementById('dThan').value);

        dtn = parseInt(document.getElementById('m_dtn').value);

        tong = luc + the + nhanh + tri + than;

        o_dtn = dtn - tong;

    }

    if (o_dtn <=0 ){
        alert("Đã Hết Điểm Tiềm Năng");
        o_dtn = 0;
        document.getElementById('o_dtn').innerText = o_dtn.toString();
    }else{
        document.getElementById('o_dtn').innerText = o_dtn.toString();
    }
}
