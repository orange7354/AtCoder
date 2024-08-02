package main

import (
	"fmt"
	"os"
)

func main() {
	var n int
	fmt.Scan(&n)

	var input string

	var beforeString string = ""

	for i := 0; i < n; i++ {
		fmt.Scan(&input)
		if beforeString == "sweet" && input == "sweet" && i != n-1 {
			fmt.Println("No")
			os.Exit(1)
		} else {
			beforeString = input
		}
	}

	fmt.Println("Yes")
}
