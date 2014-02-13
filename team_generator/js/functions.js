/**
 *
 * Функция заполняет массив(размер берется из начального условия), указанным значением
 */
function fillArray(arr,value)
{
	var size = parseInt($("#amount").val());
	for(var i=0;i<size;i++)
	{
		arr[i] = value;
	}
}

/**
 *
 * Устанавливает значение по-умолчанию(ноль) для незаполненных элементов
 */
function setMatrixZero()
{
	var inputs = $('input[type=text]');
	for(var i=1;i<inputs.length;i++)
	{
		if(inputs[i].value == "")
		{
			inputs[i].value = 0;
		}
	}
}

/**
 *
 * Solution of the assignment problem (Hungarian algorithm)
 */
function hungariian(matrix,result)
{
	var size = matrix.length;
	var u = new Array();
	var v = new Array();
	var markIndices = new Array();

	fillArray(markIndices,-1);
	fillArray(u,0);
	fillArray(v,0);

	for(var i = 0; i < size; i++)
	{
		var links = new Array();
		var temp = new Array();
		var visited = new Array();

		fillArray(links,-1);
		if(checkMax())
		{
			fillArray(temp,-1);
		}
		else
		{
			fillArray(temp,99999);
		}
		fillArray(visited,false);

		var markedI = i;
		var markedJ = -1;
		var j;

		do{
			j = -1;

			for(var j1 = 0; j1 < size; j1++)
			{
				if(!visited[j1])
				{
					if(checkMax())
					{
						if(matrix[markedI][j1] - u[markedI] - v[j1] > temp[j1])
						{
							temp[j1] = matrix[markedI][j1] - u[markedI] - v[j1];
							links[j1] = markedJ;
						}
						if(j==-1 || temp[j1] > temp[j])
						{
							j = j1;
						}
					}
					else
					{
						if(matrix[markedI][j1] - u[markedI] - v[j1] < temp[j1])
						{
							temp[j1] = matrix[markedI][j1] - u[markedI] - v[j1];
							links[j1] = markedJ;
						}
						if(j==-1 || temp[j1] < temp[j])
						{
							j = j1;
						}
					}
				}
			}

			var delta = temp[j];

			for(var j2 = 0; j2 < size; j2++)
			{
				if(visited[j2])
				{
					u[markIndices[j2]] += delta;
					v[j2] -= delta;
				}
				else
				{
					temp[j2] -= delta;
				}
			}

			u[i] += delta;
			visited[j] = true;
			markedJ = j;
			markedI = markIndices[j];
		}

		while(markedI != -1);

		for( ;links[j] != -1; j = links[j])
		{
			markIndices[j] = markIndices[links[j]];
		}
		markIndices[j] = i;
	}

	var count = 0;
	for(var jj = 0; jj < size; jj++)
	{
		count += matrix[markIndices[jj]][jj];
		result[jj] = markIndices[jj];
	}
	return count;
}

/**
 *
 * The function gets the value of the completed matrix form
 */
function getMatrix()
{
	setMatrixZero();
	var matrix =  new Array();
	var count = $("#amount").val();
	var inputs = $('input[type=text]');

	for(var i=0;i<count;i++)
	{
		matrix[i] = new Array();
		for(var j=0;j<count;j++)
		{
			matrix[i][j] = parseInt(inputs[i*count+j+1].value);
		}
	}
	return matrix;
}

/**
 *
 * Function finds the result and outputs the result
 */
function considerResult()
{
	var points = new Array();
	var count;
	var matrix =  getMatrix();

	count = hungariian(matrix, points);


	var result = "";
	if(checkMax())
	{
		result = "Maximum ";
	}
	else
	{
		result = "Minimum ";
	}
	result +="of the objective function: " + count;
	var resultMatrix = "";

	resultMatrix += "<br /><hr /> Optimal Team: <br /><br />";
	resultMatrix += getResultMatrix(points);
	resultMatrix += "<br /><hr />";
	resultMatrix += result;

	$("#result").html(resultMatrix);

	return matrix;
}

/**
 *
 * Function draws the table to enter the matrix
 */
function render()
{
	var count = $("#amount").val();
	var outputText = "<table><tr style='text-align: center'>\n";

    for(var i=1;i<=count;i++)
    {
        outputText += "<td>" + i + " </td>";
    }

    for(i=0;i<count;i++)
	{


		if(i%2)
		{
			outputText += "<tr>";
		}
		else
		{
			outputText += "<tr class='color'>";
		}

		for(var j=0;j<count;j++)
		{
           outputText += "<td><input type='text'></td>\n";
		}
		outputText += "</tr>";
	}

	outputText += "</table>";
	$("#result").html("");
	$("#form").html(outputText);

	$("input[type=text]").numberMask({beforePoint:4});
}

/**
 *
 * Функция для покраски результата ответа
 */
function isAnswer(points,i,j)
{
	var size = parseInt($("#amount").val());
	for(var k=0;k<size;k++)
	{
		if(points[k] == i && k == j)
		{
			return true;
		}
	}
	return false;
}

function getResultMatrix(points)
{
	var count = $("#amount").val();

	var matrix = getMatrix();

	var outputResult = "<table id='matrix_result'><tr style='text-align: center; background-color: #343334; color: #ffffff'>\n";

    for(var i=1;i<=count;i++)
    {
        outputResult += "<td>" + i + " </td>";
    }

	for(i=0;i<count;i++)
	{
		outputResult += "<tr>";
		for(var j=0;j<count;j++)
		{
			var color = "";
			if(isAnswer(points,i,j))
			{
				color = " class='answer'"
			}
			outputResult += "<td" + color + ">" + matrix[i][j] + "</td>\n";
		}
		outputResult += "</tr>";
	}

	outputResult += "</table>";
	return outputResult;

}

function checkMax()
{
	if(document.getElementById("min").checked == false)
	{
		return true;
	}
	else
	{
		return false;
	}
}

/**
 *
 *  Деббагер объекта/удалить
 */
function var_dump(oElem) {
	var sStr = '';
	if (typeof(oElem) == 'string' || typeof(oElem) == 'number')     {
		sStr = oElem;
	} else {
		var sValue = '';
		for (var oItem in oElem) {
			sValue = oElem[oItem];
			if (typeof(oElem) == 'innerHTML' || typeof(oElem) == 'outerHTML') {
				sValue = sValue.replace(/</g, '&lt;').replace(/>/g, '&gt;');
			}
			sStr += 'obj.' + oItem + ' = ' + sValue + '\n';
		}
	}
	return sStr;
}
