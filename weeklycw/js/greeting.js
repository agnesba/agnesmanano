 //Script Details
 var dateTime = new Date();
 var hours = dateTime.getHours();
 var greeting;

 if (hours <= 5) {
 	greeting = "It's" + hours + "you should be in bed!";
 } 
else if (hours <= 10) {
 	greeting = "Good Morning" + hours + "The lecture will begins soon";
 } 
else if (hours == 11) {
 	greeting = "It's" + hours + "You are a bit late to the lecture but it's all good";
 } 

else if (hours <= 13) {
 	greeting = "It's lunch Time." + hours + "Try eating at the Greenwich Market";
 } 

else if (hours <= 17) {
 	greeting = "It's" + hours + "Almost done for the day. Reward Yourself after with a drink";
 } 

else if (hours <= 20) {
 	greeting = "It's" + hours + "Time to relax and unwind";
 } 

else {
 	greeting = "It's" + hours + "Time to get ready for bed!";

 }
 var el = document.getElementById('greeting')
 el.innerHTML = greeting;
