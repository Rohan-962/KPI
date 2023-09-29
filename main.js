function setMetNotMetStatus(target_type,target,v_actual_score,met_notmet)
{
    if(target_type.innerText == 'higher the better')
    {
        if(v_actual_score >= target)
        {
            met_notmet.innerHTML = 'Met'
            
        }else{
            met_notmet.innerHTML = 'Not-Met'
        }
    }else if(target_type.innerText == 'lower the better'){
        if(v_actual_score <= target)
        {
            met_notmet.innerHTML = 'Met'
        }else{
            met_notmet.innerHTML = 'Not-Met'
        }
    }
}

function actualScore(e){
    let row = e.parentNode.parentNode;

    var type = row.children[3];
    var target = (row.children[4].innerHTML);
    var target_type = row.children[5];
    var v_actual_score = (row.children[9].children[0].value);
    var met_notmet = row.children[10];
        
    if(type.innerText == 'Number')
    {
        target = Number(target);
        v_actual_score = Number(v_actual_score)

        setMetNotMetStatus(target_type,target,v_actual_score,met_notmet)
      
    }
    else if(type.innerText == 'Percent')
    {
        var perIndex = target.indexOf("%")
        var result = target.slice(0,perIndex)
        
        target = Number(result);
        v_actual_score = Number(v_actual_score)

        setMetNotMetStatus(target_type,target,v_actual_score,met_notmet)
    }
    else if(type.innerText == 'RAG')
    {
        // target = row.children[4];
        console.log(target)
        let result = target.split(";")
        console.log(result[0])

        //First condition
        temp1 = result[0].indexOf(":")
        temp2 = result[0].indexOf("-")
        temp3 = result[0].indexOf(")")

        //Second condition
        temp4 = result[2].indexOf(":")
        temp5 = result[2].indexOf("-")
        temp6 = result[2].indexOf(")");

        first_digit = Number(result[0].substring(temp1 +1,temp2 ))
        second_last_digit =  Number(result[0].substring(temp2 +1,temp3))
        last_digit = Number(result[2].substring(temp5 +1,temp6))
        
        // console.log(temp1 + 1)
        // console.log(temp1 + " "  + temp2 + " " + temp3)
        console.log(first_digit + " " + second_last_digit + " " + last_digit)
        //(R:0-4)
        if(v_actual_score <= second_last_digit)
        {
            met_notmet.innerHTML = 'Not-Met'
        }
        else{
            met_notmet.innerHTML = 'Met'
        }
        
    }
    
}