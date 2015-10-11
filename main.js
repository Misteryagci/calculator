var op1 = -1; 
var op2 = 0;
var res = 0;
var turn = 1;
var ft = true;
var operator = "";

function change_turn ()
{
	if (turn === 1)
		turn = 2;
	else
	{
		turn = 1;
	}
}

function change_number_display (text)
{
	if (text === '.')
		$('#number_display').text("0.");
	else	
		$('#number_display').text(text);
}
function number_click(num)
{	

	if 	(ft)
	{
		change_number_display(num);
		if (num != 0)
			ft=false;
	}
	else
	{
		$('#number_display').text($('#number_display').text() + "" + num);
	}
	
}

function calcul()
{
	switch (operator) {
		case "+":
			res=op1+op2;
			break;
		case "-":
			res=op1-op2;
			break;
		case "x":
			res=op1*op2;
			break;
		case "/":
			res=op1/op2;
			break;
		case "sqrt":
			res=Math.sqrt(op1);
			break;
		default:
			break;
		}
	change_number_display(res);
	operator = '';
	turn = 1;
}
function clear_screen()
{
	$('#number_display').text("0");
	op1 = 0;
	op2 = 0;
	res = 0;
	ft = true;
	turn = 1;
	operator = "";5
}
function operator_click (op)
{
	if ((op !== '=') && (op !== "C"))
	{
		operator=op;
	}
	if (turn === 1)
	{
		op1 = parseFloat($('#number_display').text());
	}
	else
	{
		op2 = parseFloat($('#number_display').text());	
	}
	change_turn();
	if (turn === 1)
	{
		calcul();
		if (res !== 0)
		{
			alert(res);
			op1 = res;
			turn = 2;
		}
	}
	if (op === "C")
		clear_screen();
	if ((op === 'sqrt')||(op==='='))
	{
		calcul();
		op1 = res;
		turn = 2;
	}
	ft=true;
}