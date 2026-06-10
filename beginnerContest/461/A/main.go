package main

import "fmt"

func main() {
	var a, d int
	fmt.Scan(&d, &a)

	if a >= d {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}
}
