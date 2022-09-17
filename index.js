fetch('https://pomber.github.io/covid19/timeseries.json')
.then(response => response.json())
.then(json => {
    let total_confirm = 0;
    let total_death = 0;

    for(let x in json) {
      //for total confirm
     total_confirm += json[x][json[x].length-1]['confirmed'];

       //for total death
       total_death += json[x][json[x].length-1]['deaths'];

        //for countries
        const node_c = document.createElement("tr");
         const textnode_c = document.createTextNode(x);
         node_c.appendChild(textnode_c);
         document.getElementById("countries").appendChild(node_c);


        //for confirmed
         const node = document.createElement("tr");
         const textnode = document.createTextNode(json[x][json[x].length-1]['confirmed']);
         node.appendChild(textnode);
         document.getElementById("confirmed").appendChild(node);

        //for deaths
        const node_death = document.createElement("tr");
        const textnode_death = document.createTextNode(json[x][json[x].length-1]['deaths']);
        node_death.appendChild(textnode_death);
        document.getElementById("deaths").appendChild(node_death);


    }
    // console.log(total_confirm);
    document.getElementById("confirm").innerHTML = total_confirm;
    document.getElementById("dea").innerHTML = total_death;


   } )

