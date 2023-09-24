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
        console.log(target.innerHTML)
    }
    
}