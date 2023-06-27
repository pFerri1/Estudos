import java.util.*;

public class PageRankCalculator {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Digite o número de páginas: ");
        int numPages = scanner.nextInt();

        double[][] adjacencyMatrix = new double[numPages][numPages];
        double[] pageRank = new double[numPages];

        System.out.println("Digite a matriz de adjacência:");

        for (int i = 0; i < numPages; i++) {
            double sum = 0;

            for (int j = 0; j < numPages; j++) {
                adjacencyMatrix[i][j] = scanner.nextDouble();
                sum += adjacencyMatrix[i][j];
            }

            // Normaliza os valores na matriz de adjacência
            if (sum > 0) {
                for (int j = 0; j < numPages; j++) {
                    adjacencyMatrix[i][j] /= sum;
                }
            }
        }

        System.out.print("Digite o fator de amortecimento (entre 0 e 1): ");
        double dampingFactor = scanner.nextDouble();

        // Inicializa o vetor de PageRank com valores uniformes
        double initialPageRank = 1.0 / numPages;
        Arrays.fill(pageRank, initialPageRank);

        // Iterações para calcular o PageRank
        int numIterations = 10; // Número de iterações (pode ser ajustado)
        for (int iteration = 0; iteration < numIterations; iteration++) {
            double[] newPageRank = new double[numPages];

            for (int i = 0; i < numPages; i++) {
                for (int j = 0; j < numPages; j++) {
                    newPageRank[j] += dampingFactor * pageRank[i] * adjacencyMatrix[i][j];
                }
            }

            pageRank = newPageRank;
        }

        System.out.println("\nPageRank:");
        for (int i = 0; i < numPages; i++) {
            System.out.printf("Página %d: %.4f\n", i, pageRank[i]);
        }
    }
}
