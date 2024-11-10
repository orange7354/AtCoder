package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	sc := bufio.NewScanner(os.Stdin)
	sc.Split(bufio.ScanWords)

	numbers := make([]int, 3)

	for i := 0; i <= 2; i++ {
		sc.Scan()
		s, _ := strconv.Atoi(sc.Text())
		numbers[i] = s
	}

	a := numbers[0]
	b := numbers[1]
	c := numbers[2]
	i := 1
	for c <= b {
		i++
		if a <= c && c <= b {
			fmt.Println(c)
			os.Exit(0)
			break
		}
		c *= i
	}

	fmt.Println(-1)
}
