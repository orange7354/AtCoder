package main

import (
	"fmt"
	"math"
)

func main() {
	var n float64

	fmt.Scan(&n)
	var ans int = int(math.Floor(n * 1.08))
	if ans > 206 {
		fmt.Println(":(")
	} else if ans == 206 {
		fmt.Println("so-so")
	} else {
		fmt.Println("Yay!")
	}
}
