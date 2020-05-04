jQuery(function ($) {
    $("#exportButtonPdf").click(function () {
        alert("exportButtonPdf");
        // parse the HTML table element having an id=exportTable
       /*  var dataSource = shield.DataSource.create({
            data: "#exportTable",
            schema: {
                type: "table",
                fields: {
                    No: { type: String },
                    Name: { type: String },
                    Size: { type: String },
                    Color: { type: String },
                    Qty: { type: String },
                    Price: { type: String },
                    Total: { type: String }
                }
            }
        }); */

        // when parsing is done, export the data to PDF
        /* dataSource.read().then(function (data) {
            var pdf = new shield.exp.PDFDocument({
                author: "PrepBootstrap",
                created: new Date()
            });

            pdf.addPage("a4", "portrait");

            pdf.table(
                50,
                50,
                data,
                [
                    { field: "No", title: "No.", width: 10 },
                    { field: "Name", title: "Product name", width: 100 },
                    { field: "Size", title: "Size", width: 10 },
                    { field: "Color", title: "Color", width: 50 },
                    { field: "Qty", title: "Qty", width: 50 },
                    { field: "Price", title: "Price", width: 50 },
                    { field: "Total", title: "Total", width: 50 }
                ],
                {
                    margins: {
                        top: 50,
                        left: 50
                    }
                }
            );

            pdf.saveAs({
                fileName: "PrepBootstrapPDF"
            });
        }); */
    });
});
/* 
jQuery(function ($) {
    $("#exportButtonExcel").click(function () {
        // parse the HTML table element having an id=exportTable
        var dataSource = shield.DataSource.create({
            data: "#exportTable",
            schema: {
                type: "table",
                fields: {
                    Name: { type: String },
                    Age: { type: Number },
                    Email: { type: String }
                }
            }
        });

        // when parsing is done, export the data to Excel
        dataSource.read().then(function (data) {
            new shield.exp.OOXMLWorkbook({
                author: "PrepBootstrap",
                worksheets: [
                    {
                        name: "PrepBootstrap Table",
                        rows: [
                            {
                                cells: [
                                    {
                                        style: {
                                            bold: true
                                        },
                                        type: String,
                                        value: "Name"
                                    },
                                    {
                                        style: {
                                            bold: true
                                        },
                                        type: String,
                                        value: "Age"
                                    },
                                    {
                                        style: {
                                            bold: true
                                        },
                                        type: String,
                                        value: "Email"
                                    }
                                ]
                            }
                        ].concat($.map(data, function(item) {
                            return {
                                cells: [
                                    { type: String, value: item.Name },
                                    { type: Number, value: item.Age },
                                    { type: String, value: item.Email }
                                ]
                            };
                        }))
                    }
                ]
            }).saveAs({
                fileName: "PrepBootstrapExcel"
            });
        });
    });
}); */