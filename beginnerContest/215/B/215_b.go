package main

import "fmt"

func main() {
	N := 0
	fmt.Scanf("%d", &N)
	k, v := 0, 1
	for ; v <= N; k++ {
		v *= 2
	}
	fmt.Println(k - 1)
}
