function checkcart(){
var price_total=0;
var item1= document.getElementById("item1").value;
var item2= document.getElementById("item2").value;
var item3= document.getElementById("item3").value;
var item4= document.getElementById("item4").value;
var item5= document.getElementById("item5").value;
    

var a=[item1,item2,item3,item4,item5];

for(i=0;i<5;i++)
    {
        if(a[i]=="Four Cheese Pasta"||a[i]=="Corn Cannelloni"||a[i]=="Sicilian Pizza"||a[i]=="Tartufo")
            {
                price_total+=350;
            }
        else if(a[i]=="Tiramisu")
            {
                price_total+=200;
            }
        else if(a[i]=="Panna Cotta")
            {
                price_total+=250;
            }
        else if(a[i]=="Zeppole")
            {
                price_total+=300;
            }
        else if(a[i]=="Strawberry granit")
            {
                price_total+=325;
            }
        else if(a[i]=="Mushroom Risotto")
            {
                price_total+=400;
            }
        else if(a[i]=="Gattinara")
            {
                price_total+=450;
            }
        else if(a[i]=="Lambrusco")
            {
                price_total+=500;
            }
        else if(a[i]=="Neapolitan Pizza")
            {
                price_total+=550;
            }
    }

    
document.getElementById("total").innerHTML=(price_total);

}