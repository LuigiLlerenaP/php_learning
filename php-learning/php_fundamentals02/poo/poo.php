<?php

class Sale
{
    private float $total;
    private string $date;

    /**
     * Sale class constructor
     * @throws Exception If the total is negative or the date is invalid
     */
    public function __construct(float  $total,string $date)
    {
        $this->setTotal($total);
        $this->setDate($date);
    }

    /**
     * @throws Exception If the total is negative
     */
    public function setTotal(float $total)
    {
        if ($total < 0) {
            throw new Exception("The total amount cannot be negative.");
        }
        $this->total = $total;
    }


    public function getTotal():float
    {
        return $this->total;
    }

    /**
     * Sets the date of the sale
     * @throws Exception If the date format is incorrect
     */
    public function setDate(string $date) :void
    {
        $dateTime = DateTime::createFromFormat('Y-m-d', $date);
        if (!$dateTime || $dateTime->format('Y-m-d') !== $date) {
            throw new Exception("Invalid date format. Use YYYY-MM-DD.");
        }
        $this->date = $date;
    }
    public function getDate():string
    {
        return $this->date;
    }

    public function createInvoice() :void
    {
        echo "Invoice created for the sale on " . $this->getDate() . " with a total of $" . $this->getTotal() . ".";
    }

    public function __destruct()
    {
        echo "Object destroyed. Resources have been released.";
    }
}

?>

<?php include "../includes/index.php"; ?>
<section>
    <article>
        <h2>OOP - Sale Class Example</h2>

        <?php
        try {
            // Create a new Sale object with valid values
            $sale = new Sale(150.75, '2024-09-19');
            // Display the sale information and create the invoice
            $sale->createInvoice();
        } catch (Exception $e) {
            // Error handling
            echo "<p>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
        ?>
    </article>
</section>
<?php include "../includes/footer.php"; ?>