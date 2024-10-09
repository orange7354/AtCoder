package main

import "fmt"

func main() {
	var a, b int
	fmt.Scan(&a, &b)

	if a*6 >= b {
		if a <= b {
			fmt.Println("Yes")
		} else {
			fmt.Println("No")
		}
	} else {
		fmt.Println("No")
	}
}
