var a=document.getElementsByClassName("pannel");
var i;
var len=a.length;
for(i=0;i<len;i++){
    a[i].addEventListener('click',function(){
        this.classList.toggle('active');
        var pa=this.nextElementSibling;
        if(pa.style.maxHeight){
            pa.style.maxHeight=null;
        }else{
            pa.style.maxHeight=pa.scrollHeight+'px';
        }
    }
}
