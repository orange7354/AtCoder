package main

import (
	"fmt"
	"math"
)

func main() {
	var n float64
	fmt.Scan(&n)
	var k float64
	for math.Pow(2.0, k) <= n {
		k++
	}

	fmt.Println(int(k - 1))
}
