<?php
//TODO doraminoさんからお借りした。読み解く
[$N,$M] = fscanf(STDIN,"%d%d");
if($M==0) exit(0 . PHP_EOL);
$uf = new UnionFind($N);
for($i=0;$i<$M;++$i){
    [$a,$b] = fscanf(STDIN,"%d%d");
    $uf->union($a,$b);
}

$ans = 0;
for($i=1;$i<$N;++$i){
    $root = $uf->root($i);
    if(isset($memo[$root])) continue;
    $n = $uf->sz[$root];
    $m = $uf->cnt[$root];
    $memo[$root] = true;
    $ans += intdiv($n*($n-1),2) - $m;
}

echo $ans . PHP_EOL;





class UnionFind
{
    public $pr = [];
    public $sz = [];
    public $cnt = [];

    function __construct($n){
        for($i=1;$i<=$n;++$i){
            $this->pr[$i] = $i;
            $this->sz[$i] = 1;
        }
    }

    function push($x){
        $this->pr[$x] = $x;
        $this->sz[$x] = 1;
    }

    function root($a){
        if($this->pr[$a] === $a) return $a;
        return $this->pr[$a] = $this->root($this->pr[$a]);
    }

    function union($a, $b){
        $a = $this->root($a);
        $b = $this->root($b);
        $this->cnt[$a] = ($this->cnt[$a]??0)+1;
        if($a === $b) return;
        if($this->sz[$a] < $this->sz[$b]) list($a,$b) = [$b,$a];
        $this->pr[$b] = $a;
        $this->sz[$a] += $this->sz[$b];
        $this->cnt[$a] += ($this->cnt[$b]??0);
    }

    function isSame($a,$b){
        return $this->root($a) === $this->root($b);
    }

    function size($a){
        return $this->sz[$this->root($a)];
    }
}
