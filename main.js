var res = 0;
var operator = "";

function change_number_display (text)
{
	$('#number_display').text(text);
}
function number_click(num)
{	
	change_number_display(num);
	if (operator === "")
	{
		res = num;
	}
	else
	{
		calcul(num);
	}
}
function calcul(num)
{
	switch (operator) {
		case "+":
			res=res+num;
			break;
		case "-":
			res=res-num;
			break;
		case "x":
			res=res*num;
			break;
		case "/":
			res=res/num;
			break;
		case "sqrt":
			res=Math.sqrt(res);
			break;
		default:
			break;
		}
	change_number_display(res);
	operator = '';
}
function operator_click (op)
{
	operator=op;
	if ((op === 'sqrt')||(op==='='))
	{
		calcul(0);
	}
}