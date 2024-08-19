package main

import (
	"fmt"
	"os"
)

func main() {
	var n, t, a int
	fmt.Scan(&n, &t, &a)

	if a >= t {
		if n-(t+a) < a-t {
			fmt.Println("Yes")
			os.Exit(0)
		}
	} else {
		if n-(t+a) < t-a {
			fmt.Println("Yes")
			os.Exit(0)
		}
	}

	fmt.Println("No")
}
