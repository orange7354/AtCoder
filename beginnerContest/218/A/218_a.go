package main

import (
	"fmt"
	"strings"
)

func main() {
	var n int
	var s string
	fmt.Scan(&n)
	fmt.Scan(&s)

	slices := strings.Split(s, "")

	if slices[n-1] == "o" {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}

}
