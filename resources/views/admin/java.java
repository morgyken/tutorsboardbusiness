Lineitem.java
public class Lineitem {
String itemname;
int quantity;
double price;
Lineitem(String itemname,int quantity,double price){
setItemname(itemname);
setQunatity(quantity);
setPrice(price);
}
public void setPrice(double price) {
 this.price=price;
}
public void setQunatity(int quantity) {
 this.quantity=quantity;
}
public void setItemname(String itemname) {
            this.itemname=itemname;
}
public String getItemname(){
return this.itemname;
}
public int getQuantity(){
return this.quantity;
}
public double getPrice(){
return this.price;
}
public double getTotalprice(){
return this.quantity*this.price;
}
    public String tostring(){
    return this.itemname+" qty:"+this.quantity+" @ $"+this.price;
    }
}
---------------------------------------------------
Transaction.java
import java.util.*;
public class Transaction {
static List<Lineitem>lineitemlist=new ArrayList<Lineitem>();
int customerid;
String customername;
Transaction(int customerid,String customername){
setcustomerid(customerid);
setcustomername(customername);
}
public void setcustomername(String customername) {
this.customername=customername;
}
public void setcustomerid(int customerid) {
this.customerid=customerid;
}
public void addLineitem(String name,int quantity,double price){
Lineitem lineitem=new Lineitem(name,quantity,price);
         boolean sucess=lineitemlist.add(lineitem);
         if(!sucess)
         System.out.println("unsuccesfully inserted:");
         
}
public void updateitem(String name,int quantity,double price){
for(int i=0;i<lineitemlist.size();i++){
Lineitem ls=(Lineitem)lineitemlist.get(i);
if(ls.getItemname().equalsIgnoreCase("name")){
lineitemlist.remove(i);
Lineitem ll=new Lineitem(name,quantity,price);
boolean b=lineitemlist.add(ll);
if(!b)
System.out.println("unsuccesfuly in updation...");
break;
}
}
}
public double getTotalprice(){
double totalamount=0;
for(Lineitem getl:lineitemlist){
totalamount+=getl.getTotalprice();
}
return totalamount;
}
public void getLineitem(String name){
for(Lineitem getl:lineitemlist){
if(getl.getItemname().equalsIgnoreCase("name")){
getl.tostring();
break;
}else{
System.out.println(name+" did not found!!!!");
}
}
}
public void tostring(){
System.out.println("Customer ID:"+this.customerid);
System.out.println("Customer Name:"+this.customername);
for(int i=0;i<lineitemlist.size();i++){
Lineitem l=(Lineitem)lineitemlist.get(i);
System.out.println(l.getItemname());
}
System.out.println("TRANSACTION TOTAL:");
for(Lineitem s:lineitemlist){
System.out.println(s.tostring());
}
for(Lineitem s:lineitemlist){
System.out.println("$"+s.getTotalprice());
}
System.out.println("Total transaction price:$"+this.getTotalprice());
}
}

-----------------------------------------------------
Driver_Lineitem.java

package Assignment;
public class Driver_lineitem {
public static void main(String[] args) {
String name="swarup";
int id=1298;
Transaction t=new Transaction(id,name);
t.addLineitem("shoes", 1, 500);
t.addLineitem("shirts", 2, 450);
t.addLineitem("pants", 3, 900);
t.tostring();
}
}