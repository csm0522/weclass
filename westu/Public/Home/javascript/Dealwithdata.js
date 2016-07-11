/**
 * Created by Chan on 16/7/11.
 */
function CheckEmail(str){
    var remail = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    if(remail.test(str)){
        return true;
    }
    else{
        return false;
    }
}