else if(btnVal == '=') {
  var equation = inputVal;
  var lastChar = equation[equation.length - 1];
	
  equation = equation.replace(/x/g, '*').replace(/÷/g, '/');
	
  if(operators.indexOf(lastChar) > -1 || lastChar == '.')
  	equation = equation.replace(/.$/, '');
	
  if(equation)
	input.innerHTML = eval(equation);
		
  decimalAdded = false;
}