const inputs = document.querySelectorAll('.input');
const progress = document.querySelector('.progress__bar');
console.log(inputs.length);
const segments = 50 / inputs.length;
console.log(segments);

let fieldValues = [];

//progress.style.width = 20 +'%';
const checkFields = () => {
  let fieldsCompleted = 0;
  let barWidth = 0;
  
  for(let i = fieldValues.length; i--;) {
    if(fieldValues[i] === true){
      fieldsCompleted += 1;
      
      if(fieldsCompleted == 1){
          document.getElementById('comment').textContent = "Profile 67% complete";
      }
      if(fieldsCompleted == 2){
        document.getElementById('comment').textContent = "Profile 83% complete";
    }
    if(fieldsCompleted == 3){
        document.getElementById('comment').textContent = "Profile 100% complete";
    }
    
    }
    
  }
  console.log(segments);
  barWidth = fieldsCompleted * segments;
  
  progress.style.width =50 + barWidth + '%';
  
};

for(let i = inputs.length; i--;){
  inputs[i].addEventListener('input', (event) => {
    const currentInput = event.currentTarget;
    
    if(!currentInput.value.length){
      fieldValues[i] = false;
    } else {
      fieldValues[i] = true;
    }
    
    checkFields();
  });
}
