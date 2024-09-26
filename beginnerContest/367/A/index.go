package main

import (
	"fmt"
	"os"
)

func main() {
	var a, b, c int
	fmt.Scan(&a, &b, &c)

	if b < c {
		if a > c || a < b {
			fmt.Println("Yes")
			os.Exit(0)
		} else {
			fmt.Println("No")
			os.Exit(0)
		}
	} else {
		if a > c && a < b {
			fmt.Println("Yes")
			os.Exit(0)
		} else {
			fmt.Println("No")
			os.Exit(0)
		}
	}
}
