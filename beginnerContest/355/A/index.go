package main

import (
	"fmt"
	"os"
)

func main() {
	var a, b int
	fmt.Scan(&a, &b)

	if a == b {
		fmt.Println(-1)
		os.Exit(0)
	}

	fmt.Println(6 - a - b)
}
