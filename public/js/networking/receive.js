import {Make_Map, Populate_Map} from '../map/map.js';
export var socket =  new WebSocket("ws://www.saycum.com/ws");

function Message(data) {
    console.log(data)
}

function Map(data) {
    let mapWidth = parseInt(data.substring(0, 2), 10);
    let serverMap = data.substring(2);
    Make_Map(serverMap, mapWidth);
}

let Update = {
    0: Message,
    1: Map,
    2: Populate_Map.
}

socket.onmessage = function(event) {    
    if (event.data === 0) {
        return
    }

    let type = event.data[0];
    let data = event.data.substring(1);

    //need to use a hash map
    Update[type](data);
    
    //populate map on startup
    
    //on periodic update
      //update positions
      //update damage
      //get new chunk to emplace in map array
    
   // //message
   // if (type === "0") {
   //     console.log(data);
   // }
   // 
   // //map
   // else if (type === "1") {
   //     let mapWidth = parseInt(data.substring(0, 2), 10);
   //     let serverMap = data.substring(2);
   //     Make_Map(serverMap, mapWidth);
   //     
   // }
//
//    //update units on map position
//    else if (type === "2") {
//        Populate_Map(data);
//    }
//    
};
