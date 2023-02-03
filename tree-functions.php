<?php

/**
Para agregar pruebas unitarias y validaciones en PHP, puede utilizar una librería de pruebas unitarias como PHPUnit
*/

// Clase que representa un árbol
class Tree {
    // Propiedades de la clase
    public $root;        // Raíz del árbol
    public $subtrees;    // Subárboles del árbol
    public $weight;      // Peso del árbol

    // Constructor de la clase
    public function __construct($root, $subtrees, $weight) {
        // Inicialización de las propiedades
        $this->root = $root;
        $this->subtrees = $subtrees;
        $this->weight = $weight;
    }
}

// Función que devuelve el peso de un árbol
function treeWeight(Tree $tree) {
    // Inicialización de las variables
    $weight = $tree->weight;
    $total_weight = $weight;

    // Recorre todos los subárboles del árbol actual
    foreach ($tree->subtrees as $subtree) {
        // Suma el peso de cada subárbol al peso total
        $total_weight += treeWeight($subtree);
    }

    // Devuelve el peso total del árbol
    return $total_weight;
}

// Función que devuelve el peso promedio de un árbol
function treeAverageWeight(Tree $tree) {
    // Inicialización de las variables
    $weight = $tree->weight;
    $total_weight = $weight;
    $total_nodes = 1;

    // Recorre todos los subárboles del árbol actual
    foreach ($tree->subtrees as $subtree) {
        // Suma el peso de cada subárbol al peso total
        $total_weight += treeWeight($subtree);
        // Incrementa el número total de nodos en 1 por cada subárbol
        $total_nodes += count($subtree->subtrees) + 1;
    }

    // Devuelve el peso promedio del árbol
    return $total_weight / $total_nodes;
}

// Función que devuelve la altura de un árbol
function treeHeight(Tree $tree) {
    // Inicialización de las variables
    $height = 1;
    $max_height = 1;

    // Recorre todos los subárboles del árbol actual
    foreach ($tree->subtrees as $subtree) {
        // Calcula la altura de cada subárbol y almacena la máxima
        $height = treeHeight($subtree) + 1;
        $max_height = max($height, $max_height);
    }

    // Devuelve la altura máxima del árbol
    return $max_height;
}

/**
Creación de los Árboles

Para crear un árbol, primero debemos especificar el número de raíces que tendrá (cada raíz puede tener varios subárboles). Luego, definimos las subraíces mediante otros árboles previamente creados y clasificados como hijos y nietos. Finalmente, establecemos como tercer parámetro el peso de la raíz principal. Este proceso se puede aplicar tanto para la creación de un árbol padre, hijo o nieto.
*/

// Árbol 1
$tree1 = new Tree(1, [], 4);

// Árbol 2
    // Hijos
    $tree_child1 = new Tree(1, [], 2);
    $tree_child2 = new Tree(1, [], 1);

$tree2 = new Tree(2, [$tree_child1, $tree_child2], 4);


//arbol 3
        //nietos
        $tree_grandchild1 = new Tree(1, [], 3);
        $tree_grandchild2 = new Tree(1, [], 1);
        $tree_grandchild3 = new Tree(1, [], 4);

    //hijos
    $tree_child3 = new Tree(1, [], 1);
    $tree_child4 = new Tree(1, [$tree_grandchild1], 2);
    $tree_child5 = new Tree(2, [$tree_grandchild2, $tree_grandchild3], 5);

$tree3 = new Tree(6, [$tree_child3, $tree_child4, $tree_child5], 4);


$echo_tree = $tree3; //escoja el arbol 
echo "Peso del árbol : " . treeWeight($echo_tree) . "\n";
echo "Peso promedio del árbol : " . treeAverageWeight($echo_tree) . "\n";
echo "Altura del árbol : " . treeHeight($echo_tree) . "\n";

?>
